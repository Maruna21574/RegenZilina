<?php

namespace Tests\Unit;

use App\Support\ReservationSchedule;
use PHPUnit\Framework\TestCase;

class ReservationScheduleTest extends TestCase
{
    public function test_slots_are_generated_every_thirty_minutes_outside_lunch(): void
    {
        $slots = ReservationSchedule::availableSlots(1, [], []);

        $this->assertContains('09:00', $slots);
        $this->assertContains('09:30', $slots);
        $this->assertContains('10:30', $slots);
        $this->assertNotContains('11:00', $slots);
        $this->assertNotContains('12:00', $slots);
        $this->assertNotContains('13:30', $slots);
        $this->assertContains('14:00', $slots);
        $this->assertContains('17:00', $slots);
        $this->assertNotContains('17:30', $slots);
    }

    public function test_booking_blocks_all_slots_less_than_ninety_minutes_away(): void
    {
        $slots = ReservationSchedule::availableSlots(1, ['10:00'], []);

        $this->assertNotContains('09:00', $slots);
        $this->assertNotContains('09:30', $slots);
        $this->assertNotContains('10:00', $slots);
        $this->assertNotContains('10:30', $slots);
        $this->assertContains('14:00', $slots);
    }

    public function test_ninety_minute_boundary_is_available(): void
    {
        $this->assertFalse(ReservationSchedule::conflictsWithReservation('11:30', ['10:00']));
        $this->assertTrue(ReservationSchedule::conflictsWithReservation('11:00', ['10:00']));
    }

    public function test_lunch_time_cannot_be_submitted_directly(): void
    {
        $this->assertFalse(ReservationSchedule::isWorkingTime('11:00', 1));
        $this->assertFalse(ReservationSchedule::isWorkingTime('12:30', 1));
        $this->assertFalse(ReservationSchedule::isWorkingTime('13:30', 1));
        $this->assertTrue(ReservationSchedule::isWorkingTime('14:00', 1));
    }
}
