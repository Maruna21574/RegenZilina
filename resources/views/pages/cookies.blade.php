@extends('layouts.app')

@section('title', 'Politika cookies — REGEN ŽILINA')
@section('meta_description', 'Politika cookies REGEN ŽILINA — ako používame cookies na našej webovej stránke.')
@section('meta_keywords', 'cookies politika, cookies, sledovanie, súhlasy')

@section('content')

<section class="page-hero page-hero--short" style="background-image: url('{{ asset("img/pexels-koolshooters-6628615.webp") }}')">
    <div class="container">
        <span class="label label--light anim-fade">Právne informácie</span>
        <h1 class="page-hero__title anim-fade" data-delay="1">Politika<br><span>cookies</span></h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="legal-content anim-reveal">
            <style>
                .legal-content h2 { margin-top: 2.5rem; margin-bottom: 1.5rem; padding-top: 1rem; font-size: 1.5rem; font-weight: bold; }
                .legal-content h3 { margin-top: 2rem; margin-bottom: 1rem; font-size: 1.25rem; font-weight: 600; }
                .legal-content p { margin-bottom: 1rem; line-height: 1.6; }
                .legal-content ul, .legal-content ol { margin-left: 1.5rem; margin-bottom: 1.5rem; }
                .legal-content li { margin-bottom: 0.5rem; }
                .legal-content table { margin-bottom: 1.5rem; }
                .legal-content th, .legal-content td { padding: 0.75rem; border: 1px solid #ddd; }
                .legal-content th { background-color: #f3f4f6; font-weight: 600; }
            </style>
            <div class="legal-content__intro">
                <p><strong>Posledná aktualizácia:</strong> 19. júla 2026</p>
                <p>Táto politika cookies vysvetľuje, ako REGEN ŽILINA používa cookies a podobné sledovacie technológie na našej webovej stránke regenzilina.sk.</p>
            </div>

            <h2>1. Čo sú cookies?</h2>
            <p>Cookies sú malé textové súbory, ktoré sa ukladajú do vášho zariadenia pri návšteve webovej stránky. Podobne môže prehliadač ukladať nastavenia do lokálneho úložiska (localStorage).</p>
            <ul>
                <li>udržiavať bezpečnú reláciu a chrániť formuláre,</li>
                <li>zapamätať si vašu voľbu súhlasu,</li>
                <li>sprístupniť funkcie, ktoré ste si vyžiadali.</li>
            </ul>

            <h2>2. Typy cookies, ktoré používame</h2>

            <h3>A) Nevyhnutné cookies</h3>
            <p><strong>Povinné:</strong> Áno — bez týchto cookies stránka nebude správne fungovať.</p>
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <tr style="background-color: #f0f0f0;">
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Cookie</th>
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Účel</th>
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Doba uchovávky</th>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">regen-zilina-session</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Bezpečná relácia, rezervácia a prihlásenie administrátora</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">120 minút od poslednej aktivity</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">XSRF-TOKEN</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Ochrana formulárov pred CSRF útokmi (ak ju aplikácia odošle)</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">120 minút</td>
                </tr>
            </table>

            <h3>B) Analytické a marketingové cookies</h3>
            <p>V súčasnosti nepoužívame Google Analytics, reklamné pixely ani iné analytické či marketingové cookies.</p>

            <h3>C) Lokálne úložisko pre nastavenia</h3>
            <p>Nasledujúce údaje nie sú cookies. Ukladajú sa iba vo vašom prehliadači:</p>
            <ul>
                <li><strong>regen_cookie_consent_v1</strong> — vaša voľba cookies a externého obsahu, najviac 12 mesiacov,</li>
                <li><strong>regen_promo_code, regen_promo_percent, regen_promo_timestamp</strong> — získaná zľava, 30 dní,</li>
                <li><strong>regen_promo_dismissed</strong> — zatvorenie ponuky počas aktuálnej karty prehliadača.</li>
            </ul>

            <h3>D) Externý obsah</h3>
            <p>Vloženú mapu Google Maps načítame až po vašom súhlase. Po načítaní môže Google spracovať technické údaje, napríklad IP adresu, a podľa vašich nastavení vytvoriť vlastné cookies. Tieto cookies neriadime.</p>
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <tr style="background-color: #f0f0f0;">
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Služba</th>
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Účel</th>
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Politika</th>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">Google Maps</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Vložená mapa našej polohy</td>
                    <td style="border: 1px solid #ddd; padding: 10px;"><a href="https://policies.google.com/privacy" target="_blank">Google Privacy</a></td>
                </tr>
            </table>

            <h2>3. Ako spravovať cookies</h2>
            <p><strong>Vo vašom prehliadači:</strong></p>
            <ul>
                <li><strong>Chrome:</strong> Nastavenia → Bezpečnosť a súkromie → Cookies a iné údaje stránok</li>
                <li><strong>Firefox:</strong> Možnosti → Súkromie a bezpečnosť → Cookies a údaje stránok</li>
                <li><strong>Safari:</strong> Preferencie → Súkromie → Cookies a údaje webov</li>
                <li><strong>Edge:</strong> Nastavenia → Súkromie, vyhľadávanie a služby → Cookies a iné údaje stránok</li>
            </ul>
            <h2>4. Súhlas a jeho zmena</h2>
            <p>Pri prvej návšteve si môžete ponechať iba nevyhnutné cookies alebo povoliť externý obsah. Svoju voľbu môžete kedykoľvek zmeniť:</p>
            <ul>
                <li>cez odkaz „Nastavenia cookies“ v pätičke,</li>
                <li>vymazaním údajov stránky v nastaveniach prehliadača.</li>
            </ul>

            <h2>5. Bezpečnosť a súkromie</h2>
            <p>Relačná cookie je chránená nastaveniami HttpOnly a SameSite=Lax. Neukladáme do nej heslá ani platobné údaje.</p>

            <h2>6. Zmeny tejto politiky</h2>
            <p>Túto politiku môžeme aktualizovať pri zmene používaných technológií. Aktuálny dátum nájdete v úvode dokumentu.</p>

            <h2>7. Kontakt a právne informácie</h2>
            <p>Ak máte akékoľvek otázky ohľadom tejto politiky cookies:</p>
            <p><strong>Email:</strong> info@regenzilina.sk<br>
            <strong>Telefón:</strong> +421 910 900 664<br>
            <strong>Adresa:</strong> J. M. Hurbana 4, Žilina 010 01, Slovensko</p>

            <p style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #ddd;">
                <strong>Súvisiace dokumenty:</strong><br>
                <a href="{{ route('privacy') }}">Ochrana súkromia</a><br>
                <a href="{{ route('terms') }}">Obchodné podmienky</a>
            </p>
        </div>
    </div>
</section>

@endsection
