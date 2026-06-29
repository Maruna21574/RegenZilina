<?php

namespace App\Http\Controllers;

use App\Mail\ReservationAdminNotify;
use App\Mail\ReservationReceived;
use App\Models\BlockedSlot;
use App\Models\DiscountCode;
use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function getServices(): JsonResponse
    {
        $services = Service::where('active', true)->orderBy('sort_order')->get();
        return response()->json($services);
    }

    public function getAvailableSlots(Request $request): JsonResponse
    {
        $request->validate([
            'date' => 'required|date|after_or_equal:today',
        ]);

        $date = $request->input('date');
        $dayOfWeek = date('N', strtotime($date));

        if ($dayOfWeek == 7) {
            return response()->json([]);
        }

        $blockedFull = BlockedSlot::where('date', $date)->whereNull('time')->exists();
        if ($blockedFull) {
            return response()->json([]);
        }

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

        $unavailable = array_merge($blockedTimes, $bookedTimes);

        $slots = [];
        $start = 9;
        $end = ($dayOfWeek == 6) ? 14 : 18;

        for ($hour = $start; $hour < $end; $hour++) {
            $time = sprintf('%02d:00', $hour);
            if (!in_array($time, $unavailable)) {
                $slots[] = $time;
            }
        }

        return response()->json($slots);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
            'note' => 'nullable|string|max:1000',
            'discount_code' => 'nullable|string|max:50',
        ]);

        if (!empty($validated['discount_code'])) {
            $discount = DiscountCode::where('code', $validated['discount_code'])->first();
            if ($discount && $discount->isValid()) {
                $validated['discount_percent'] = $discount->percent;
                $discount->update(['used' => true, 'used_by_email' => $validated['email']]);
            } else {
                unset($validated['discount_code']);
            }
        }

        $dayOfWeek = date('N', strtotime($validated['date']));
        if ($dayOfWeek == 7) {
            return response()->json(['message' => 'V nedeľu nepracujeme.'], 422);
        }

        $isBlocked = BlockedSlot::where('date', $validated['date'])
            ->where(function ($q) use ($validated) {
                $q->whereNull('time')->orWhere('time', $validated['time']);
            })->exists();

        if ($isBlocked) {
            return response()->json(['message' => 'Tento termín nie je dostupný.'], 422);
        }

        $isTaken = Reservation::where('date', $validated['date'])
            ->where('time', $validated['time'])
            ->whereIn('status', ['pending', 'confirmed'])
            ->exists();

        if ($isTaken) {
            return response()->json(['message' => 'Tento termín je už obsadený.'], 422);
        }

        $reservation = Reservation::create($validated);
        $reservation->load('service');

        try {
            Mail::to($reservation->email)->send(new ReservationReceived($reservation));
            Mail::to(config('mail.from.address'))->send(new ReservationAdminNotify($reservation));
        } catch (\Exception $e) {
            // Mail failure should not block reservation
        }

        return response()->json([
            'message' => 'Rezervácia bola úspešne odoslaná! Čoskoro vás kontaktujeme.',
            'reservation' => $reservation,
        ]);
    }
}
