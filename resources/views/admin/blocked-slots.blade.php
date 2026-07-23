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
                <label>Dôvod</label>
                <input type="text" name="reason" placeholder="Napr. dovolenka">
            </div>
        </div>

        <div class="form-group-admin" style="margin-top: 16px;">
            <label style="text-transform:none; font-size:14px;">
                <input type="checkbox" id="wholeDayCheckbox" name="whole_day" value="1">
                Zablokovať celý deň
            </label>
        </div>

        <div class="form-group-admin" id="timesWrap" style="margin-top: 12px;">
            <label>Časy (vyber jeden alebo viac)</label>
            <div id="timesCheckboxes" class="time-checks">
                <span style="color:#999; font-size:13px;">Najprv vyber dátum.</span>
            </div>
        </div>

        <button type="submit" class="btn-sm btn-sm--primary" style="margin-top: 16px;">Zablokovať</button>
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
        const timesWrap = document.getElementById('timesWrap');
        const timesBox = document.getElementById('timesCheckboxes');
        const wholeDayCheckbox = document.getElementById('wholeDayCheckbox');

        dateInput?.addEventListener('change', async () => {
            timesBox.innerHTML = '';
            if (!dateInput.value) {
                timesBox.innerHTML = '<span style="color:#999; font-size:13px;">Najprv vyber dátum.</span>';
                return;
            }

            const res = await fetch(`{{ route('admin.slot-times') }}?date=${dateInput.value}`);
            const times = await res.json();

            if (!times.length) {
                timesBox.innerHTML = '<span style="color:#999; font-size:13px;">Žiadne dostupné časy pre tento deň.</span>';
                return;
            }

            times.forEach(time => {
                const label = document.createElement('label');
                label.className = 'time-check';
                label.innerHTML = `<input type="checkbox" name="times[]" value="${time}"> ${time}`;
                timesBox.appendChild(label);
            });
        });

        wholeDayCheckbox?.addEventListener('change', () => {
            const disabled = wholeDayCheckbox.checked;
            timesWrap.style.opacity = disabled ? '0.5' : '1';
            timesBox.querySelectorAll('input[type=checkbox]').forEach(cb => {
                cb.disabled = disabled;
            });
        });
    })();
</script>
@endpush
@endsection
