<?php

namespace App\Http\Controllers;

use App\Mail\ReservationCancelled;
use App\Mail\ReservationConfirmed;
use App\Models\BlockedSlot;
use App\Models\Reservation;
use App\Models\Service;
use App\Support\ReservationSchedule;
use Carbon\Carbon;
use Illuminate\Contracts\Cache\LockTimeoutException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function loginForm()
    {
        if (session('admin_logged_in')) {
            return redirect('/admin');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (
            $request->email === config('services.admin.email') &&
            $request->password === config('services.admin.password')
        ) {
            session(['admin_logged_in' => true]);
            return redirect('/admin');
        }

        return back()->withErrors(['email' => 'Nesprávne prihlasovacie údaje.']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect('/admin/login');
    }

    public function dashboard()
    {
        $pendingCount = Reservation::where('status', 'pending')->count();
        $todayReservations = Reservation::with('service')
            ->whereDate('date', today())
            ->orderBy('time')
            ->get();

        return view('admin.dashboard', compact('pendingCount', 'todayReservations'));
    }

    public function calendar(Request $request)
    {
        $month = (int) $request->input('month', now()->month);
        $year = (int) $request->input('year', now()->year);

        if ($month < 1 || $month > 12 || $year < 2000 || $year > 2100) {
            $month = now()->month;
            $year = now()->year;
        }

        $start = Carbon::create($year, $month, 1)->startOfMonth();
        $end = $start->copy()->endOfMonth();

        $reservations = Reservation::with('service')
            ->whereBetween('date', [$start->toDateString(), $end->toDateString()])
            ->where('status', '!=', 'cancelled')
            ->orderBy('time')
            ->get()
            ->groupBy(fn($r) => $r->date->format('Y-m-d'));

        $blockedDates = BlockedSlot::whereBetween('date', [$start->toDateString(), $end->toDateString()])
            ->whereNull('time')
            ->get()
            ->map(fn($b) => $b->date->format('Y-m-d'))
            ->toArray();

        $day = $request->input('day');
        if (!$day) {
            $today = now()->toDateString();
            $day = ($today >= $start->toDateString() && $today <= $end->toDateString()) ? $today : null;
        }

        $dayReservations = collect();
        $dayClosed = false;
        $availableSlots = [];

        if ($day) {
            $dayReservations = Reservation::with('service')
                ->whereDate('date', $day)
                ->where('status', '!=', 'cancelled')
                ->orderBy('time')
                ->get();

            $dayOfWeek = Carbon::parse($day)->dayOfWeekIso;

            if ($dayOfWeek == 7 || in_array($day, $blockedDates)) {
                $dayClosed = true;
            } else {
                $availableSlots = $this->getFreeSlotsForDate($day, $dayOfWeek);
            }
        }

        $services = Service::where('active', true)->orderBy('sort_order')->get();

        return view('admin.calendar', compact(
            'start', 'reservations', 'blockedDates', 'day',
            'dayReservations', 'dayClosed', 'availableSlots', 'services', 'month', 'year'
        ));
    }

    private function getFreeSlotsForDate(string $date, int $dayOfWeek): array
    {
        $blockedTimes = BlockedSlot::where('date', $date)
            ->whereNotNull('time')
            ->pluck('time')
            ->map(fn($t) => substr($t, 0, 5))
            ->toArray();

        $bookedTimes = Reservation::where('date', $date)
            ->whereIn('status', ['pending', 'confirmed'])
            ->pluck('time')
            ->map(fn($t) => substr($t, 0, 5))
            ->toArray();

        return ReservationSchedule::availableSlots($dayOfWeek, $bookedTimes, $blockedTimes);
    }

    public function storeManualReservation(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'time' => 'required|string',
            'note' => 'nullable|string|max:1000',
        ]);

        $redirectParams = [
            'month' => (int) date('n', strtotime($validated['date'])),
            'year' => (int) date('Y', strtotime($validated['date'])),
            'day' => $validated['date'],
        ];

        $dayOfWeek = Carbon::parse($validated['date'])->dayOfWeekIso;
        if ($dayOfWeek == 7) {
            return redirect()->route('admin.calendar', $redirectParams)
                ->withErrors(['date' => 'V nedeľu nepracujeme.'])->withInput();
        }

        if (!ReservationSchedule::isWorkingTime($validated['time'], $dayOfWeek)) {
            return redirect()->route('admin.calendar', $redirectParams)
                ->withErrors(['time' => 'Tento čas nie je možné rezervovať.'])->withInput();
        }

        try {
            return Cache::lock('reservation-day-' . $validated['date'], 10)
                ->block(5, function () use ($validated, $redirectParams) {
                    $isBlocked = BlockedSlot::where('date', $validated['date'])
                        ->where(function ($q) use ($validated) {
                            $q->whereNull('time')->orWhere('time', $validated['time']);
                        })->exists();

                    if ($isBlocked) {
                        return redirect()->route('admin.calendar', $redirectParams)
                            ->withErrors(['time' => 'Tento termín nie je dostupný.'])->withInput();
                    }

                    $bookedTimes = Reservation::where('date', $validated['date'])
                        ->whereIn('status', ['pending', 'confirmed'])
                        ->pluck('time')
                        ->map(fn($time) => substr($time, 0, 5))
                        ->toArray();

                    if (ReservationSchedule::conflictsWithReservation($validated['time'], $bookedTimes)) {
                        return redirect()->route('admin.calendar', $redirectParams)
                            ->withErrors(['time' => 'Od inej rezervácie musí byť odstup aspoň 90 minút.'])->withInput();
                    }

                    $validated['status'] = 'confirmed';
                    Reservation::create($validated);

                    return redirect()->route('admin.calendar', $redirectParams)
                        ->with('success', 'Rezervácia bola manuálne pridaná.');
                });
        } catch (LockTimeoutException $e) {
            return redirect()->route('admin.calendar', $redirectParams)
                ->withErrors(['time' => 'Tento termín práve spracováva iná rezervácia, skúste to prosím znova.'])->withInput();
        }
    }

    public function reservations(Request $request)
    {
        $query = Reservation::with('service')->orderBy('date', 'desc')->orderBy('time', 'desc');

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('date')) {
            $query->whereDate('date', $request->date);
        }

        if ($request->filled('service_id')) {
            $query->where('service_id', $request->service_id);
        }

        $reservations = $query->paginate(20);
        $pendingCount = Reservation::where('status', 'pending')->count();

        return view('admin.reservations', compact('reservations', 'pendingCount'));
    }

    public function confirmReservation(Reservation $reservation)
    {
        $reservation->update(['status' => 'confirmed']);
        $reservation->load('service');

        try {
            Mail::to($reservation->email)->send(new ReservationConfirmed($reservation));
        } catch (\Exception $e) {
            //
        }

        return back()->with('success', 'Rezervácia bola potvrdená.');
    }

    public function cancelReservation(Reservation $reservation)
    {
        $reservation->update(['status' => 'cancelled']);
        $reservation->load('service');

        try {
            Mail::to($reservation->email)->send(new ReservationCancelled($reservation));
        } catch (\Exception $e) {
            //
        }

        return back()->with('success', 'Rezervácia bola zrušená.');
    }

    public function blockedSlots()
    {
        $slots = BlockedSlot::orderBy('date', 'desc')->orderBy('time')->paginate(20);
        return view('admin.blocked-slots', compact('slots'));
    }

    public function slotTimes(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $dayOfWeek = (int) date('N', strtotime($request->input('date')));
        $times = ReservationSchedule::availableSlots($dayOfWeek, [], []);

        return response()->json($times);
    }

    public function storeBlockedSlot(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'whole_day' => 'nullable|boolean',
            'times' => 'nullable|array',
            'times.*' => 'string',
            'reason' => 'nullable|string|max:255',
        ]);

        if ($request->boolean('whole_day')) {
            BlockedSlot::firstOrCreate(
                ['date' => $request->date, 'time' => null],
                ['reason' => $request->reason]
            );

            return back()->with('success', 'Celý deň bol zablokovaný.');
        }

        $times = $request->input('times', []);

        if (empty($times)) {
            return back()->withErrors(['times' => 'Vyberte aspoň jeden čas, alebo zvoľte celý deň.'])->withInput();
        }

        foreach ($times as $time) {
            BlockedSlot::firstOrCreate(
                ['date' => $request->date, 'time' => $time],
                ['reason' => $request->reason]
            );
        }

        return back()->with('success', count($times) > 1 ? 'Termíny boli zablokované.' : 'Termín bol zablokovaný.');
    }

    public function deleteBlockedSlot(BlockedSlot $blockedSlot)
    {
        $blockedSlot->delete();
        return back()->with('success', 'Blokácia bola odstránená.');
    }
}
