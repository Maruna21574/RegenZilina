<?php

namespace App\Http\Controllers;

use App\Mail\ReservationCancelled;
use App\Mail\ReservationConfirmed;
use App\Models\BlockedSlot;
use App\Models\Reservation;
use Illuminate\Http\Request;
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
            $request->email === env('ADMIN_EMAIL') &&
            $request->password === env('ADMIN_PASSWORD')
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

    public function storeBlockedSlot(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'nullable|string',
            'reason' => 'nullable|string|max:255',
        ]);

        BlockedSlot::create([
            'date' => $request->date,
            'time' => $request->time ?: null,
            'reason' => $request->reason,
        ]);

        return back()->with('success', 'Termín bol zablokovaný.');
    }

    public function deleteBlockedSlot(BlockedSlot $blockedSlot)
    {
        $blockedSlot->delete();
        return back()->with('success', 'Blokácia bola odstránená.');
    }
}
