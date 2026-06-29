@extends('layouts.admin')

@section('content')
<div class="main__header">
    <h1>Dashboard</h1>
</div>

<div class="stats">
    <div class="stat-card">
        <div class="stat-card__value">{{ $pendingCount }}</div>
        <div class="stat-card__label">Čakajúce na potvrdenie</div>
    </div>
    <div class="stat-card">
        <div class="stat-card__value">{{ $todayReservations->count() }}</div>
        <div class="stat-card__label">Dnes rezervácií</div>
    </div>
    <div class="stat-card">
        <div class="stat-card__value">{{ \App\Models\Reservation::where('status', 'confirmed')->count() }}</div>
        <div class="stat-card__label">Potvrdené celkovo</div>
    </div>
</div>

@if($todayReservations->count() > 0)
<div class="card">
    <div class="card__header">
        <h3 class="card__title">Dnešné rezervácie</h3>
    </div>

    {{-- Desktop --}}
    <div class="res-table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Čas</th>
                    <th>Klient</th>
                    <th>Služba</th>
                    <th>Status</th>
                    <th>Akcie</th>
                </tr>
            </thead>
            <tbody>
                @foreach($todayReservations as $r)
                <tr>
                    <td><strong>{{ \Carbon\Carbon::parse($r->time)->format('H:i') }}</strong></td>
                    <td>{{ $r->full_name }}<br><small style="color:#999">{{ $r->phone }}</small></td>
                    <td>{{ $r->service->name }}</td>
                    <td>
                        <span class="badge badge--{{ $r->status }}">
                            {{ $r->status === 'pending' ? 'Čaká' : ($r->status === 'confirmed' ? 'Potvrdená' : 'Zrušená') }}
                        </span>
                    </td>
                    <td>
                        @if($r->status === 'pending')
                            <form method="POST" action="{{ route('admin.reservation.confirm', $r) }}" style="display:inline">
                                @csrf
                                <button type="submit" class="btn-sm btn-sm--confirm">Potvrdiť</button>
                            </form>
                            <form method="POST" action="{{ route('admin.reservation.cancel', $r) }}" style="display:inline">
                                @csrf
                                <button type="submit" class="btn-sm btn-sm--cancel">Zrušiť</button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Mobile --}}
    <div class="res-cards">
        @foreach($todayReservations as $r)
        <div class="res-card res-card--{{ $r->status }}">
            <div class="res-card__header">
                <span class="res-card__name">{{ \Carbon\Carbon::parse($r->time)->format('H:i') }} — {{ $r->full_name }}</span>
                <span class="badge badge--{{ $r->status }}">
                    {{ $r->status === 'pending' ? 'Čaká' : ($r->status === 'confirmed' ? 'Potvrdená' : 'Zrušená') }}
                </span>
            </div>
            <div class="res-card__rows">
                <div class="res-card__row">Služba<strong>{{ $r->service->name }}</strong></div>
                <div class="res-card__row">Cena<strong>{{ number_format($r->service->price, 0) }}€</strong></div>
            </div>
            <div class="res-card__contact">
                <a href="tel:{{ $r->phone }}">{{ $r->phone }}</a> · {{ $r->email }}
            </div>
            @if($r->status === 'pending')
            <div class="res-card__actions">
                <form method="POST" action="{{ route('admin.reservation.confirm', $r) }}" style="flex:1">
                    @csrf
                    <button type="submit" class="btn-sm btn-sm--confirm" style="width:100%;justify-content:center;">Potvrdiť</button>
                </form>
                <form method="POST" action="{{ route('admin.reservation.cancel', $r) }}" style="flex:1">
                    @csrf
                    <button type="submit" class="btn-sm btn-sm--cancel" style="width:100%;justify-content:center;">Zrušiť</button>
                </form>
            </div>
            @endif
        </div>
        @endforeach
    </div>
</div>
@else
<div class="card">
    <p style="text-align:center;color:#999;padding:40px;">Dnes nie sú žiadne rezervácie.</p>
</div>
@endif

@if($pendingCount > 0)
<div style="text-align:center;margin-top:16px;">
    <a href="{{ route('admin.reservations', ['status' => 'pending']) }}" class="btn-sm btn-sm--primary">Zobraziť všetky čakajúce rezervácie</a>
</div>
@endif
@endsection
