@extends('layouts.admin')

@section('content')
@php
    $monthNames = [1=>'Január',2=>'Február',3=>'Marec',4=>'Apríl',5=>'Máj',6=>'Jún',7=>'Júl',8=>'August',9=>'September',10=>'Október',11=>'November',12=>'December'];
    $prevMonth = $month == 1 ? 12 : $month - 1;
    $prevYear = $month == 1 ? $year - 1 : $year;
    $nextMonth = $month == 12 ? 1 : $month + 1;
    $nextYear = $month == 12 ? $year + 1 : $year;

    $leading = $start->copy()->dayOfWeekIso - 1;
    $daysInMonth = $start->daysInMonth;
    $totalCells = $leading + $daysInMonth;
    $trailing = (7 - $totalCells % 7) % 7;
    $todayStr = now()->toDateString();
@endphp

<div class="main__header">
    <h1>Kalendár</h1>
</div>

<div class="cal-layout">
    <div class="card cal-card">
        <div class="cal-nav">
            <a href="{{ route('admin.calendar', ['month' => $prevMonth, 'year' => $prevYear]) }}" class="btn-sm btn-sm--primary">&laquo;</a>
            <h3>{{ $monthNames[$month] }} {{ $year }}</h3>
            <a href="{{ route('admin.calendar', ['month' => $nextMonth, 'year' => $nextYear]) }}" class="btn-sm btn-sm--primary">&raquo;</a>
        </div>

        <div class="cal-grid">
            @foreach(['Po','Ut','St','Št','Pi','So','Ne'] as $wd)
                <div class="cal-grid__weekday">{{ $wd }}</div>
            @endforeach

            @for($i = 0; $i < $leading; $i++)
                <div class="cal-day cal-day--empty"></div>
            @endfor

            @for($d = 1; $d <= $daysInMonth; $d++)
                @php
                    $cellDate = $start->copy()->day($d);
                    $dateStr = $cellDate->toDateString();
                    $cellReservations = $reservations->get($dateStr, collect());
                    $pendingCount = $cellReservations->where('status', 'pending')->count();
                    $confirmedCount = $cellReservations->where('status', 'confirmed')->count();
                    $isBlocked = in_array($dateStr, $blockedDates);
                    $isSunday = $cellDate->dayOfWeekIso == 7;
                    $isToday = $dateStr === $todayStr;
                    $isSelected = $day === $dateStr;
                @endphp
                <a href="{{ route('admin.calendar', ['month' => $month, 'year' => $year, 'day' => $dateStr]) }}"
                   class="cal-day {{ $isToday ? 'cal-day--today' : '' }} {{ $isSelected ? 'cal-day--selected' : '' }} {{ ($isBlocked || $isSunday) ? 'cal-day--closed' : '' }}">
                    <span class="cal-day__num">{{ $d }}</span>
                    @if($pendingCount || $confirmedCount)
                        <span class="cal-day__dots">
                            @if($pendingCount)
                                <span class="cal-day__dot cal-day__dot--pending">{{ $pendingCount }}</span>
                            @endif
                            @if($confirmedCount)
                                <span class="cal-day__dot cal-day__dot--confirmed">{{ $confirmedCount }}</span>
                            @endif
                        </span>
                    @endif
                    @if($isBlocked)
                        <span class="cal-day__closed-label">Blokované</span>
                    @endif
                </a>
            @endfor

            @for($i = 0; $i < $trailing; $i++)
                <div class="cal-day cal-day--empty"></div>
            @endfor
        </div>
    </div>

    <div class="card cal-day-panel">
        @if($day)
            <div class="card__header">
                <h3 class="card__title">{{ \Carbon\Carbon::parse($day)->format('d.m.Y') }}</h3>
            </div>

            <div class="cal-res-list">
                @forelse($dayReservations as $r)
                <div class="cal-res-item">
                    <div class="cal-res-item__time">{{ \Carbon\Carbon::parse($r->time)->format('H:i') }}</div>
                    <div class="cal-res-item__body">
                        <div class="cal-res-item__top">
                            <strong>{{ $r->full_name }}</strong>
                            <span class="badge badge--{{ $r->status }}">
                                @if($r->status === 'pending') Čaká
                                @else Potvrdená
                                @endif
                            </span>
                        </div>
                        <div class="cal-res-item__meta">{{ $r->service->name }} · {{ $r->phone }}</div>
                    </div>
                    <div class="cal-res-item__actions">
                        @if($r->status === 'pending')
                        <form method="POST" action="{{ route('admin.reservation.confirm', $r) }}">
                            @csrf
                            <button type="submit" class="btn-sm btn-sm--confirm">Potvrdiť</button>
                        </form>
                        @endif
                        <form method="POST" action="{{ route('admin.reservation.cancel', $r) }}">
                            @csrf
                            <button type="submit" class="btn-sm btn-sm--cancel">Zrušiť</button>
                        </form>
                    </div>
                </div>
                @empty
                <p style="color:#999;padding:12px 0;">Žiadne rezervácie v tento deň.</p>
                @endforelse
            </div>

            @if($dayClosed)
                <p style="color:#999;padding:12px 0;border-top:1px solid #f0f0f0;margin-top:12px;">
                    Tento deň je zatvorený alebo celý blokovaný — nie je možné pridať rezerváciu.
                </p>
            @else
                <details class="cal-add">
                    <summary>+ Pridať rezerváciu</summary>
                    <form method="POST" action="{{ route('admin.reservation.store-manual') }}" class="cal-add__form">
                        @csrf
                        <div class="form-row">
                            <div class="form-group-admin">
                                <label>Služba</label>
                                <select name="service_id" required>
                                    <option value="">Vyberte...</option>
                                    @foreach($services as $s)
                                        <option value="{{ $s->id }}" {{ old('service_id') == $s->id ? 'selected' : '' }}>{{ $s->name }} — {{ number_format($s->price, 0) }}€</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group-admin">
                                <label>Dátum</label>
                                <input type="date" name="date" value="{{ old('date', $day) }}" required>
                            </div>
                            <div class="form-group-admin">
                                <label>Čas</label>
                                <select name="time" required>
                                    <option value="">Vyberte...</option>
                                    @foreach($availableSlots as $slot)
                                        <option value="{{ $slot }}" {{ old('time') === $slot ? 'selected' : '' }}>{{ $slot }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group-admin">
                                <label>Meno</label>
                                <input type="text" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group-admin">
                                <label>Priezvisko</label>
                                <input type="text" name="surname" value="{{ old('surname') }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group-admin">
                                <label>Telefón</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" required>
                            </div>
                            <div class="form-group-admin">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="form-group-admin" style="margin-bottom:16px;">
                            <label>Poznámka</label>
                            <input type="text" name="note" value="{{ old('note') }}">
                        </div>
                        <button type="submit" class="btn-sm btn-sm--primary">Uložiť rezerváciu</button>
                    </form>
                </details>
            @endif
        @else
            <p style="color:#999;">Vyber deň v kalendári.</p>
        @endif
    </div>
</div>
@endsection
