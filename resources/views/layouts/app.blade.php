<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'REGEN ŽILINA — profesionálne masáže, manuálna terapia, regenerácia a baňkovanie v Žiline. Individuálny prístup, online rezervácia.')">
    <meta name="keywords" content="@yield('meta_keywords', 'masáže Žilina, manuálna terapia Žilina, regenerácia Žilina, športová masáž, relaxačná masáž, baňkovanie, kineziotejping, bolesti chrbta, masérske štúdio Žilina')">
    <meta name="author" content="REGEN ŽILINA">
    <meta name="robots" content="index, follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'REGEN ŽILINA — Masáže, Manuálna terapia & Regenerácia v Žiline')</title>
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="sk_SK">
    <meta property="og:site_name" content="REGEN ŽILINA">
    <meta property="og:title" content="@yield('title', 'REGEN ŽILINA — Masáže, Manuálna terapia & Regenerácia v Žiline')">
    <meta property="og:description" content="@yield('meta_description', 'Profesionálne masáže, manuálna terapia, regenerácia a baňkovanie v Žiline. Individuálny prístup, online rezervácia.')">
    <meta property="og:image" content="@yield('og_image', asset('img/og-share.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'REGEN ŽILINA — Masáže & Regenerácia')">
    <meta name="twitter:description" content="@yield('meta_description', 'Profesionálne masáže, manuálna terapia, regenerácia a baňkovanie v Žiline.')">
    <meta name="twitter:image" content="@yield('og_image', asset('img/og-share.jpg'))">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('img/favicon_regen.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}">

    {{-- Structured Data - LocalBusiness --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "HealthAndBeautyBusiness",
        "name": "REGEN ŽILINA",
        "description": "Profesionálne masáže, manuálna terapia, regenerácia a baňkovanie v Žiline. Individuálny prístup ku každému klientovi.",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('img/regen_logo_new.png') }}",
        "image": "{{ asset('img/foto_1.webp') }}",
        "telephone": "+421910900664",
        "email": "info@regenzilina.sk",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "J. M. Hurbana 4",
            "addressLocality": "Žilina",
            "postalCode": "010 01",
            "addressCountry": "SK"
        },
        "geo": {
            "@@type": "GeoCoordinates",
            "latitude": "49.22537647468947",
            "longitude": "18.737427713390687"
        },
        "openingHoursSpecification": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "09:00",
            "closes": "18:00"
        },
        "priceRange": "€€",
        "aggregateRating": {
            "@@type": "AggregateRating",
            "ratingValue": "5",
            "reviewCount": "7"
        },
        "sameAs": []
    }
    </script>
    @stack('structured_data')
</head>
<body>
    <nav class="nav" id="nav">
        <div class="nav__inner">
            <a href="{{ route('home') }}" class="nav__logo">
                <img src="{{ asset('img/regen_white.webp') }}" alt="REGEN Žilina — masáže a regenerácia" class="nav__logo-img nav__logo-img--white">
                <img src="{{ asset('img/logo_regen_def.webp') }}" alt="REGEN Žilina — masáže a regenerácia" class="nav__logo-img nav__logo-img--dark">
            </a>

            <button class="nav__toggle" id="navToggle" aria-label="Menu">
                <span></span>
                <span></span>
            </button>

            <div class="nav__menu" id="navMenu">
                <a href="{{ route('home') }}" class="nav__link {{ request()->routeIs('home') ? 'nav__link--active' : '' }}">Domov</a>
                <a href="{{ route('about') }}" class="nav__link {{ request()->routeIs('about') ? 'nav__link--active' : '' }}">O nás</a>
                <a href="{{ route('services') }}" class="nav__link {{ request()->routeIs('services') ? 'nav__link--active' : '' }}">Služby</a>
                <a href="{{ route('body-map') }}" class="nav__link {{ request()->routeIs('body-map') ? 'nav__link--active' : '' }}">Čo vás bolí?</a>
                <a href="{{ route('pricing') }}" class="nav__link {{ request()->routeIs('pricing') ? 'nav__link--active' : '' }}">Cenník</a>
                <a href="{{ route('contact') }}" class="nav__link {{ request()->routeIs('contact') ? 'nav__link--active' : '' }}">Kontakt</a>
                <a href="{{ route('booking') }}" class="nav__cta">Rezervácia</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer__cta">
            <div class="container">
                <div class="footer__cta-inner">
                    <div class="footer__cta-text">
                        <h2>Začnite svoju cestu k úľave</h2>
                        <p>Prvý krok je ten najťažší. My vám ho uľahčíme.</p>
                    </div>
                    <a href="{{ route('booking') }}" class="btn btn--white btn--lg">
                        <span>Rezervovať termín</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__main">
            <div class="container">
                <div class="footer__grid">
                    <div class="footer__col footer__col--brand">
                        <a href="{{ route('home') }}" class="footer__logo">
                            <img src="{{ asset('img/regen_white.webp') }}" alt="REGEN Žilina — masážne štúdio" class="footer__logo-img" loading="lazy">
                        </a>
                        <p>Profesionálne masáže, manuálna terapia a regenerácia v srdci Žiliny.</p>
                    </div>
                    <div class="footer__col">
                        <h4>Navigácia</h4>
                        <a href="{{ route('home') }}">Domov</a>
                        <a href="{{ route('about') }}">O nás</a>
                        <a href="{{ route('services') }}">Služby</a>
                        <a href="{{ route('pricing') }}">Cenník</a>
                        <a href="{{ route('booking') }}">Rezervácia</a>
                    </div>
                    <div class="footer__col">
                        <h4>Kontakt</h4>
                        <p class="footer__contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            J. M. Hurbana 4, Žilina 01001
                        </p>
                        <p class="footer__contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <a href="tel:+421910900664" class="footer__contact-link">+421 910 900 664</a>
                        </p>
                        <p class="footer__contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <a href="mailto:info@regenzilina.sk" class="footer__contact-link">info@regenzilina.sk</a>
                        </p>
                        <div class="footer__hours">
                            <span>Po–Pi</span> <span>9:00–18:00</span>
                        </div>
                    </div>
                </div>
                <div class="footer__social">
                    <a href="https://www.instagram.com/regenzilina" target="_blank" rel="noopener" aria-label="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61587353300234" target="_blank" rel="noopener" aria-label="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom-inner">
                    <p>&copy; {{ date('Y') }} REGEN ŽILINA. Všetky práva vyhradené.</p>
                    <div class="footer__bottom-links">
                        <a href="#">Ochrana súkromia</a>
                        <a href="#">Obchodné podmienky</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- DISCOUNT POPUP --}}
    <div class="promo" id="promo">
        <button class="promo__close" id="promoClose">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>

        {{-- Stav 1: Ponuka --}}
        <div class="promo__offer" id="promoOffer">
            <div class="promo__header">
                <span class="promo__badge">Zľava pre vás</span>
                <h3 class="promo__title">Skúste svoje šťastie</h3>
            </div>
            <p class="promo__text">Získajte zľavu na prvú návštevu.</p>
            <button class="promo__spin-btn" id="promoSpin">
                Odkryť zľavu
            </button>
            <button class="promo__dismiss" id="promoDismiss">Nabudúce</button>
        </div>

        {{-- Stav 2: Výsledok --}}
        <div class="promo__result" id="promoResult" style="display:none;">
            <div class="promo__percent" id="promoPercent">10%</div>
            <p class="promo__win">Vaša zľava bola aktivovaná!</p>
            <div class="promo__code-box">
                <span id="promoCode">REGEN10-XXXXXX</span>
                <button class="promo__copy" id="promoCopy">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
                </button>
            </div>
            <p class="promo__note">Automaticky sa použije pri rezervácii · platí 7 dní</p>
            <a href="{{ route('booking') }}" class="promo__book-btn">Rezervovať so zľavou</a>
        </div>
    </div>

    <button class="scroll-top" id="scrollTop" aria-label="Späť hore">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="18 15 12 9 6 15"/></svg>
    </button>

    <script src="{{ asset('js/app.js') }}?v={{ filemtime(public_path('js/app.js')) }}"></script>
</body>
</html>
