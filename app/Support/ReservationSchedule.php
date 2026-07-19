<?php

namespace App\Support;

final class ReservationSchedule
{
    public const SLOT_INTERVAL_MINUTES = 30;
    public const RESERVATION_GAP_MINUTES = 90;

    /**
     * @param array<int, string> $bookedTimes
     * @param array<int, string> $blockedTimes
     * @return array<int, string>
     */
    public static function availableSlots(int $dayOfWeek, array $bookedTimes, array $blockedTimes): array
    {
        if ($dayOfWeek === 7) {
            return [];
        }

        $endMinutes = ($dayOfWeek === 6 ? 14 : 18) * 60;
        $slots = [];

        for ($minutes = 9 * 60; $minutes <= $endMinutes - 60; $minutes += self::SLOT_INTERVAL_MINUTES) {
            $time = self::formatMinutes($minutes);

            if (!self::isWorkingTime($time, $dayOfWeek)) {
                continue;
            }

            if (in_array($time, $blockedTimes, true)) {
                continue;
            }

            if (self::conflictsWithReservation($time, $bookedTimes)) {
                continue;
            }

            $slots[] = $time;
        }

        return $slots;
    }

    public static function isWorkingTime(string $time, int $dayOfWeek): bool
    {
        $minutes = self::toMinutes($time);
        if ($minutes === null || $dayOfWeek === 7) {
            return false;
        }

        $endMinutes = ($dayOfWeek === 6 ? 14 : 18) * 60;
        $isLunch = $minutes >= 11 * 60 && $minutes < 14 * 60;

        return $minutes >= 9 * 60
            && $minutes <= $endMinutes - 60
            && $minutes % self::SLOT_INTERVAL_MINUTES === 0
            && !$isLunch;
    }

    /** @param array<int, string> $bookedTimes */
    public static function conflictsWithReservation(string $time, array $bookedTimes): bool
    {
        $candidate = self::toMinutes($time);
        if ($candidate === null) {
            return true;
        }

        foreach ($bookedTimes as $bookedTime) {
            $booked = self::toMinutes($bookedTime);
            if ($booked !== null && abs($candidate - $booked) < self::RESERVATION_GAP_MINUTES) {
                return true;
            }
        }

        return false;
    }

    private static function toMinutes(string $time): ?int
    {
        if (!preg_match('/^(\d{2}):(\d{2})(?::\d{2})?$/', $time, $matches)) {
            return null;
        }

        $hours = (int) $matches[1];
        $minutes = (int) $matches[2];
        if ($hours > 23 || $minutes > 59) {
            return null;
        }

        return $hours * 60 + $minutes;
    }

    private static function formatMinutes(int $minutes): string
    {
        return sprintf('%02d:%02d', intdiv($minutes, 60), $minutes % 60);
    }
}
