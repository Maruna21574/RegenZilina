@extends('layouts.admin')

@section('content')
<div class="main__header">
    <h1>Rezervácie</h1>
    @if($pendingCount > 0)
        <span class="badge badge--pending">{{ $pendingCount }} čaká na potvrdenie</span>
    @endif
</div>

<div class="card">
    <div class="card__header">
        <h3 class="card__title">Filtrovať</h3>
    </div>
    <form method="GET" action="{{ route('admin.reservations') }}">
        <div class="form-row">
            <div class="form-group-admin">
                <label>Status</label>
                <select name="status">
                    <option value="">Všetky</option>
                    <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Čakajúce</option>
                    <option value="confirmed" {{ request('status') === 'confirmed' ? 'selected' : '' }}>Potvrdené</option>
                    <option value="cancelled" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Zrušené</option>
                </select>
            </div>
            <div class="form-group-admin">
                <label>Dátum</label>
                <input type="date" name="date" value="{{ request('date') }}">
            </div>
            <div class="form-group-admin">
                <label>Služba</label>
                <select name="service_id">
                    <option value="">Všetky</option>
                    @foreach(\App\Models\Service::all() as $service)
                        <option value="{{ $service->id }}" {{ request('service_id') == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn-sm btn-sm--primary">Filtrovať</button>
            <a href="{{ route('admin.reservations') }}" class="btn-sm btn-sm--delete">Zrušiť filter</a>
        </div>
    </form>
</div>

<div class="card">
    {{-- Desktop table --}}
    <div class="res-table-wrap" style="overflow-x:auto;">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Klient</th>
                    <th>Kontakt</th>
                    <th>Služba</th>
                    <th>Dátum</th>
                    <th>Čas</th>
                    <th>Status</th>
                    <th>Akcie</th>
                </tr>
            </thead>
            <tbody>
                @forelse($reservations as $r)
                <tr>
                    <td>{{ $r->id }}</td>
                    <td><strong>{{ $r->full_name }}</strong></td>
                    <td>
                        {{ $r->phone }}<br>
                        <small style="color:#999">{{ $r->email }}</small>
                    </td>
                    <td>{{ $r->service->name }}</td>
                    <td>{{ $r->date->format('d.m.Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($r->time)->format('H:i') }}</td>
                    <td>
                        <span class="badge badge--{{ $r->status }}">
                            @if($r->status === 'pending') Čaká
                            @elseif($r->status === 'confirmed') Potvrdená
                            @else Zrušená
                            @endif
                        </span>
                    </td>
                    <td style="white-space:nowrap;">
                        @if($r->status === 'pending')
                            <form method="POST" action="{{ route('admin.reservation.confirm', $r) }}" style="display:inline">
                                @csrf
                                <button type="submit" class="btn-sm btn-sm--confirm" title="Potvrdiť">Potvrdiť</button>
                            </form>
                            <form method="POST" action="{{ route('admin.reservation.cancel', $r) }}" style="display:inline">
                                @csrf
                                <button type="submit" class="btn-sm btn-sm--cancel" title="Zrušiť">Zrušiť</button>
                            </form>
                        @elseif($r->status === 'confirmed')
                            <form method="POST" action="{{ route('admin.reservation.cancel', $r) }}" style="display:inline">
                                @csrf
                                <button type="submit" class="btn-sm btn-sm--cancel" title="Zrušiť">Zrušiť</button>
                            </form>
                        @else
                            <span style="color:#999">—</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" style="text-align:center;color:#999;padding:40px;">Žiadne rezervácie.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Mobile cards --}}
    <div class="res-cards">
        @forelse($reservations as $r)
        <div class="res-card res-card--{{ $r->status }}">
            <div class="res-card__header">
                <span class="res-card__name">{{ $r->full_name }}</span>
                <span class="badge badge--{{ $r->status }}">
                    @if($r->status === 'pending') Čaká
                    @elseif($r->status === 'confirmed') Potvrdená
                    @else Zrušená
                    @endif
                </span>
            </div>
            <div class="res-card__rows">
                <div class="res-card__row">Dátum<strong>{{ $r->date->format('d.m.Y') }}</strong></div>
                <div class="res-card__row">Čas<strong>{{ \Carbon\Carbon::parse($r->time)->format('H:i') }}</strong></div>
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
            @elseif($r->status === 'confirmed')
            <div class="res-card__actions">
                <form method="POST" action="{{ route('admin.reservation.cancel', $r) }}" style="flex:1">
                    @csrf
                    <button type="submit" class="btn-sm btn-sm--cancel" style="width:100%;justify-content:center;">Zrušiť</button>
                </form>
            </div>
            @endif
        </div>
        @empty
        <p style="text-align:center;color:#999;padding:40px;">Žiadne rezervácie.</p>
        @endforelse
    </div>

    @if($reservations->hasPages())
    <div class="pagination-wrapper">
        @if($reservations->onFirstPage())
            <span>&laquo;</span>
        @else
            <a href="{{ $reservations->previousPageUrl() }}">&laquo;</a>
        @endif

        @foreach($reservations->getUrlRange(1, $reservations->lastPage()) as $page => $url)
            @if($page == $reservations->currentPage())
                <span class="current">{{ $page }}</span>
            @else
                <a href="{{ $url }}">{{ $page }}</a>
            @endif
        @endforeach

        @if($reservations->hasMorePages())
            <a href="{{ $reservations->nextPageUrl() }}">&raquo;</a>
        @else
            <span>&raquo;</span>
        @endif
    </div>
    @endif
</div>
@endsection
