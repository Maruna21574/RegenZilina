@extends('layouts.admin')

@section('content')
<div class="main__header">
    <h1>Blokovať termíny</h1>
</div>

<div class="card">
    <div class="card__header">
        <h3 class="card__title">Pridať blokáciu</h3>
    </div>
    <form method="POST" action="{{ route('admin.blocked-slots.store') }}">
        @csrf
        <div class="form-row">
            <div class="form-group-admin">
                <label>Dátum *</label>
                <input type="date" id="blockDate" name="date" required min="{{ date('Y-m-d') }}">
            </div>
            <div class="form-group-admin">
                <label>Čas (prázdne = celý deň)</label>
                <select id="blockTime" name="time">
                    <option value="">Celý deň</option>
                </select>
            </div>
            <div class="form-group-admin">
                <label>Dôvod</label>
                <input type="text" name="reason" placeholder="Napr. dovolenka">
            </div>
            <button type="submit" class="btn-sm btn-sm--primary">Zablokovať</button>
        </div>
    </form>
</div>

<div class="card">
    <div class="card__header">
        <h3 class="card__title">Zablokované termíny</h3>
    </div>
    <table>
        <thead>
            <tr>
                <th>Dátum</th>
                <th>Čas</th>
                <th>Dôvod</th>
                <th>Akcia</th>
            </tr>
        </thead>
        <tbody>
            @forelse($slots as $slot)
            <tr>
                <td><strong>{{ $slot->date->format('d.m.Y') }}</strong></td>
                <td>{{ $slot->time ? \Carbon\Carbon::parse($slot->time)->format('H:i') : 'Celý deň' }}</td>
                <td>{{ $slot->reason ?? '—' }}</td>
                <td>
                    <form method="POST" action="{{ route('admin.blocked-slots.delete', $slot) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-sm btn-sm--delete">Odstrániť</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" style="text-align:center;color:#999;padding:40px;">Žiadne zablokované termíny.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    @if($slots->hasPages())
    <div class="pagination-wrapper">
        @if($slots->onFirstPage())
            <span>&laquo;</span>
        @else
            <a href="{{ $slots->previousPageUrl() }}">&laquo;</a>
        @endif

        @foreach($slots->getUrlRange(1, $slots->lastPage()) as $page => $url)
            @if($page == $slots->currentPage())
                <span class="current">{{ $page }}</span>
            @else
                <a href="{{ $url }}">{{ $page }}</a>
            @endif
        @endforeach

        @if($slots->hasMorePages())
            <a href="{{ $slots->nextPageUrl() }}">&raquo;</a>
        @else
            <span>&raquo;</span>
        @endif
    </div>
    @endif
</div>

@push('scripts')
<script>
    (function () {
        const dateInput = document.getElementById('blockDate');
        const timeSelect = document.getElementById('blockTime');

        dateInput?.addEventListener('change', async () => {
            timeSelect.innerHTML = '<option value="">Celý deň</option>';
            if (!dateInput.value) return;

            const res = await fetch(`{{ route('admin.slot-times') }}?date=${dateInput.value}`);
            const times = await res.json();

            times.forEach(time => {
                const option = document.createElement('option');
                option.value = time;
                option.textContent = time;
                timeSelect.appendChild(option);
            });
        });
    })();
</script>
@endpush
@endsection
