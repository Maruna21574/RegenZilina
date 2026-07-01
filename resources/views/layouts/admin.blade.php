<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin — REGEN ŽILINA</title>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon_regen.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --primary: #2c3527;
            --green: #6B7F5E;
            --green-light: #7d9270;
            --cream: #FAF9F8;
            --accent: #8B6F47;
            --gold: #C9A96E;
            --danger: #dc3545;
            --success: #28a745;
            --warning: #ffc107;
            --sidebar-w: 260px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--cream);
            color: #333;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .admin { display: flex; min-height: 100vh; }

        .sidebar {
            width: var(--sidebar-w);
            background: var(--primary);
            color: #fff;
            padding: 0;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: 100;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s;
        }

        .sidebar__brand {
            padding: 24px 24px;
            margin-top:50px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar__brand h2 {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #fff;
        }

        .sidebar__brand small {
            color: rgba(255,255,255,0.5);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar__nav { flex: 1; padding: 16px 0; }

        .sidebar__link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 24px;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s;
            border-left: 3px solid transparent;
        }

        .sidebar__link:hover,
        .sidebar__link--active {
            color: #fff;
            background: rgba(255,255,255,0.08);
            border-left-color: var(--green-light);
        }

        .sidebar__link svg { width: 20px; height: 20px; flex-shrink: 0; }

        .sidebar__badge {
            margin-left: auto;
            background: var(--danger);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 12px;
        }

        .sidebar__footer {
            padding: 16px 24px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar__logout {
            display: flex;
            align-items: center;
            gap: 8px;
            color: rgba(255,255,255,0.5);
            text-decoration: none;
            font-size: 13px;
            background: none;
            border: none;
            cursor: pointer;
            font-family: inherit;
        }

        .sidebar__logout:hover { color: #fff; }

        .main {
            flex: 1;
            min-width: 0;
            margin-left: var(--sidebar-w);
            padding: 32px;
        }

        .main__header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 32px;
             margin-top: 20px;
        }

        .main__header h1 {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
        }

        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
            padding: 24px;
            margin-bottom: 24px;
        }

        .card__header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .card__title {
            font-size: 16px;
            font-weight: 600;
            color: var(--primary);
        }

        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; color: #999; font-weight: 600; padding: 12px 16px; border-bottom: 2px solid #f0f0f0; }
        td { padding: 14px 16px; border-bottom: 1px solid #f5f5f5; font-size: 14px; vertical-align: middle; }
        tr:hover td { background: #fafafa; }

        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge--pending { background: #fff3cd; color: #856404; }
        .badge--confirmed { background: #d4edda; color: #155724; }
        .badge--cancelled { background: #f8d7da; color: #721c24; }

        .btn-sm {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 6px 14px;
            border: none;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: opacity 0.2s;
            font-family: inherit;
        }

        .btn-sm:hover { opacity: 0.85; }
        .btn-sm--confirm { background: var(--success); color: #fff; }
        .btn-sm--cancel { background: var(--danger); color: #fff; }
        .btn-sm--primary { background: var(--green); color: #fff; }
        .btn-sm--delete { background: transparent; color: var(--danger); border: 1px solid var(--danger); }

        .form-row { display: flex; gap: 12px; flex-wrap: wrap; }
        .form-group-admin { display: flex; flex-direction: column; gap: 4px; }
        .form-group-admin label { font-size: 12px; font-weight: 600; color: #666; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group-admin input, .form-group-admin select { padding: 8px 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; font-family: inherit; }
        .form-group-admin input:focus, .form-group-admin select:focus { outline: none; border-color: var(--primary); }

        .alert {
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: 500;
        }

        .alert--success { background: #d4edda; color: #155724; }
        .alert--error { background: #f8d7da; color: #721c24; }

        .stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 32px; }

        .stat-card {
            background: #fff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        }

        .stat-card__value {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary);
        }

        .stat-card__label {
            font-size: 13px;
            color: #999;
            margin-top: 4px;
        }

        .pagination-wrapper {
            display: flex;
            justify-content: center;
            gap: 4px;
            margin-top: 20px;
        }

        .pagination-wrapper a, .pagination-wrapper span {
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 13px;
            text-decoration: none;
            color: var(--primary);
            border: 1px solid #e0e0e0;
        }

        .pagination-wrapper span.current {
            background: var(--primary);
            color: #fff;
            border-color: var(--primary);
        }

        .mobile-toggle {
            display: none;
            position: fixed;
            top: 12px;
            left: 12px;
            z-index: 200;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px 14px;
            cursor: pointer;
            font-size: 18px;
        }

        /* Mobile card view for reservations */
        .res-cards { display: none; }

        .res-card {
            background: #fff;
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 12px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
            border-left: 4px solid #ddd;
        }

        .res-card--pending { border-left-color: var(--warning); }
        .res-card--confirmed { border-left-color: var(--success); }
        .res-card--cancelled { border-left-color: var(--danger); }

        .res-card__header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .res-card__name {
            font-size: 16px;
            font-weight: 700;
            color: var(--primary);
        }

        .res-card__rows {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
            margin-bottom: 12px;
        }

        .res-card__row {
            font-size: 13px;
            color: #666;
        }

        .res-card__row strong {
            display: block;
            color: #333;
            font-size: 14px;
        }

        .res-card__contact {
            font-size: 13px;
            color: #666;
            margin-bottom: 12px;
            padding-top: 8px;
            border-top: 1px solid #f0f0f0;
        }

        .res-card__contact a {
            color: var(--green);
            text-decoration: none;
            font-weight: 500;
        }

        .res-card__actions {
            display: flex;
            gap: 8px;
        }

        .res-card__actions .btn-sm {
            flex: 1;
            justify-content: center;
            padding: 10px;
        }

        /* Calendar */
        .cal-layout { display: grid; grid-template-columns: 1.4fr 1fr; gap: 24px; align-items: start; }

        .cal-nav { display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; }
        .cal-nav h3 { font-size: 16px; font-weight: 700; color: var(--primary); text-transform: capitalize; }

        .cal-grid { display: grid; grid-template-columns: repeat(7, minmax(0, 1fr)); gap: 6px; min-width: 0; }

        .cal-grid__weekday {
            text-align: center;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #999;
            padding-bottom: 6px;
        }

        .cal-day {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            aspect-ratio: 1;
            min-width: 0;
            border-radius: 10px;
            background: #f7f6f4;
            text-decoration: none;
            color: var(--primary);
            padding: 6px 4px;
            border: 2px solid transparent;
            transition: all 0.15s;
            overflow: hidden;
        }

        .cal-day:hover { background: #eee; }
        .cal-day--empty { background: transparent; }
        .cal-day--today { border-color: var(--green-light); }
        .cal-day--selected { background: var(--primary); color: #fff; }
        .cal-day--closed { opacity: 0.45; }

        .cal-day__num { font-size: 13px; font-weight: 600; }

        .cal-day__dots { display: flex; gap: 3px; flex-wrap: wrap; justify-content: center; }

        .cal-day__dot {
            font-size: 10px;
            font-weight: 700;
            color: #fff;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cal-day__dot--pending { background: var(--warning); color: #7a5c00; }
        .cal-day__dot--confirmed { background: var(--success); }

        .cal-day__closed-label {
            font-size: 7px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            color: #c0392b;
            white-space: normal;
            word-break: break-word;
            text-align: center;
            line-height: 1.1;
        }

        .cal-day-panel { min-height: 200px; }

        .cal-res-list { display: flex; flex-direction: column; gap: 10px; margin-bottom: 16px; }

        .cal-res-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: #f7f6f4;
            border-radius: 10px;
        }

        .cal-res-item__time { font-size: 14px; font-weight: 700; color: var(--primary); flex-shrink: 0; }
        .cal-res-item__body { flex: 1; min-width: 0; overflow-wrap: anywhere; }
        .cal-res-item__top { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
        .cal-res-item__meta { font-size: 12px; color: #999; margin-top: 2px; overflow-wrap: anywhere; }
        .cal-res-item__actions { display: flex; flex-direction: column; gap: 6px; }

        .cal-add { border-top: 1px solid #f0f0f0; padding-top: 16px; }
        .cal-add summary {
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            color: var(--green);
            list-style: none;
        }
        .cal-add summary::-webkit-details-marker { display: none; }
        .cal-add__form { margin-top: 16px; display: flex; flex-direction: column; gap: 12px; }
        .cal-add__form .form-row { gap: 12px; }
        .cal-add__form .form-group-admin { flex: 1; min-width: 140px; }
        .cal-add__form input, .cal-add__form select { width: 100%; }

        @media (max-width: 768px) {
            .mobile-toggle { display: block; }
            .sidebar { transform: translateX(-100%); }
            .sidebar--open { transform: translateX(0); }
            .main { margin-left: 0; padding: 16px; padding-top: 60px; }
            .main__header h1 { font-size: 20px; }
            .form-row { flex-direction: column; }
            .form-group-admin input,
            .form-group-admin select { width: 100%; }
            .stats { grid-template-columns: 1fr 1fr; gap: 12px; }
            .stat-card { padding: 16px; }
            .stat-card__value { font-size: 24px; }
            .card { padding: 16px; }

            /* Hide table, show cards */
            .res-table-wrap { display: none; }
            .res-cards { display: block; }

            .btn-sm { font-size: 14px; padding: 10px 16px; }

            .cal-layout { grid-template-columns: 1fr; }
            .cal-day__num { font-size: 12px; }
            .cal-day__dot { width: 14px; height: 14px; font-size: 9px; }
            .cal-res-item { flex-wrap: wrap; }
            .cal-res-item__actions { flex-direction: row; width: 100%; }
            .cal-res-item__actions form { flex: 1; }
            .cal-res-item__actions .btn-sm { width: 100%; justify-content: center; }
        }

        @media (max-width: 380px) {
            .stats { grid-template-columns: 1fr; }
            .res-card__rows { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <button class="mobile-toggle" id="adminMobileToggle">☰</button>

    <div class="admin">
        <aside class="sidebar" id="adminSidebar">
            <div class="sidebar__brand">
                <img src="{{ asset('img/regen_white.webp') }}" alt="REGEN ŽILINA" style="height: 36px; width: auto; margin-bottom: 8px;">
                <small>Admin panel</small>
            </div>
            <nav class="sidebar__nav">
                <a href="{{ route('admin.dashboard') }}" class="sidebar__link {{ request()->routeIs('admin.dashboard') ? 'sidebar__link--active' : '' }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.calendar') }}" class="sidebar__link {{ request()->routeIs('admin.calendar') ? 'sidebar__link--active' : '' }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/><circle cx="8" cy="15" r="1.5" fill="currentColor" stroke="none"/><circle cx="12" cy="15" r="1.5" fill="currentColor" stroke="none"/><circle cx="16" cy="15" r="1.5" fill="currentColor" stroke="none"/></svg>
                    Kalendár
                </a>
                <a href="{{ route('admin.reservations') }}" class="sidebar__link {{ request()->routeIs('admin.reservations') ? 'sidebar__link--active' : '' }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    Rezervácie
                    @php $pendingGlobal = \App\Models\Reservation::where('status', 'pending')->count(); @endphp
                    @if($pendingGlobal > 0)
                        <span class="sidebar__badge">{{ $pendingGlobal }}</span>
                    @endif
                </a>
                <a href="{{ route('admin.blocked-slots') }}" class="sidebar__link {{ request()->routeIs('admin.blocked-slots') ? 'sidebar__link--active' : '' }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg>
                    Blokovať termíny
                </a>
            </nav>
            <div class="sidebar__footer">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="sidebar__logout">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                        Odhlásiť sa
                    </button>
                </form>
            </div>
        </aside>

        <main class="main">
            @if(session('success'))
                <div class="alert alert--success">{{ session('success') }}</div>
            @endif
            @if($errors->any())
                <div class="alert alert--error">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <script>
        document.getElementById('adminMobileToggle')?.addEventListener('click', () => {
            document.getElementById('adminSidebar').classList.toggle('sidebar--open');
        });
    </script>
</body>
</html>
