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
                <p><strong>Posledná aktualizácia:</strong> 11. júla 2026</p>
                <p>Táto politika cookies vysvetľuje, ako REGEN ŽILINA používa cookies a podobné sledovacie technológie na našej webovej stránke regenzilina.sk.</p>
            </div>

            <h2>1. Čo sú cookies?</h2>
            <p>Cookies sú malé textové súbory, ktoré sa ukladajú do pamäte vášho počítača alebo mobilného zariadenia, keď navštívite našu webovú stránku. Umožňujú nám:</p>
            <ul>
                <li>Zapamätať si vaše nastavenia a preferencie</li>
                <li>Rozpoznať vás pri budúcich návštevách</li>
                <li>Analyzovať, ako používate našu stránku</li>
                <li>Prispôsobiť obsah a reklamy</li>
            </ul>

            <h2>2. Typy cookies, ktoré používame</h2>

            <h3>A) Potrebné cookies (Technical / Functional)</h3>
            <p><strong>Povinné:</strong> Áno — bez týchto cookies stránka nebude správne fungovať.</p>
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <tr style="background-color: #f0f0f0;">
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Cookie</th>
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Účel</th>
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Doba uchovávky</th>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">PHPSESSID</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Spravovanie relácie používateľa</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Koniec relácie</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">csrf_token</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Bezpečnosť — ochrána pred CSRF útokmi</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Koniec relácie</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">admin_logged_in</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Uchovávanie stavu prihlásenia (iba admin)</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">24 hodín</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">booking_session</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Ochrana rezervačného procesu pred duplikátnymi rezerváciami</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Koniec relácie</td>
                </tr>
            </table>

            <h3>B) Analytické cookies (Analytics)</h3>
            <p><strong>Povinné:</strong> Nie — vyžadujú váš súhlas.</p>
            <p>Používame analytické cookies na pochopenie toho, ako návštevníci používajú našu webovú stránku. Tieto cookies nám pomáhajú:</p>
            <ul>
                <li>Identifikovať najobľúbenejšie stránky</li>
                <li>Zistiť, kde návštevníci opúšťajú našu stránku</li>
                <li>Zlepšovať používateľskú skúsenosť</li>
            </ul>
            <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                <tr style="background-color: #f0f0f0;">
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Provider</th>
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Cookies</th>
                    <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Doba uchovávky</th>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">Google Analytics</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">_ga, _ga_*, _gid</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">2 roky</td>
                </tr>
            </table>

            <h3>C) Preference cookies (Functionality)</h3>
            <p><strong>Povinné:</strong> Nie — vyžadujú váš súhlas.</p>
            <p>Tieto cookies si pamätajú vaše voľby a preferencie:</p>
            <ul>
                <li>Jazyk stránky</li>
                <li>Vypnutý promo pop-up</li>
                <li>Ostatné personalizované nastavenia</li>
            </ul>

            <h3>D) Marketing / Retargeting cookies</h3>
            <p><strong>Povinné:</strong> Nie — vyžadujú váš výslovný súhlas.</p>
            <p>Tieto cookies nám pomáhajú vám ukázať relevantné reklamy na sociálnych sieťach a iných webových stránkach na základe vašich záujmov. V súčasnosti ich nepoužívame.</p>

            <h3>E) Cookies tretích strán</h3>
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
                <tr>
                    <td style="border: 1px solid #ddd; padding: 10px;">Fonts Google</td>
                    <td style="border: 1px solid #ddd; padding: 10px;">Vlastný font Cormorant Garamond</td>
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
            <p><strong>Globálny Voliteľ Opt-Out (DNT):</strong> Ak máte v prehliadači nastavenú možnosť "Do Not Track", je možné, že niektoré cookies nebudú nastavené.</p>

            <h2>4. Konsenty a súhlasy</h2>
            <p>Pri vašej prvej návšteve webovej stránky vám ponúkneme súhlas s nevyhnutnými a analytickými cookies. Svoju voľbu môžete kedykoľvek zmeniť prostredníctvom:</p>
            <ul>
                <li>Súhlasového banera v spodnej časti stránky</li>
                <li>Nastavenia v menu na stránke (ak dostupné)</li>
                <li>Nastavenían vášho prehliadača</li>
            </ul>

            <h2>5. Bezpečnosť a súkromie</h2>
            <p>Vaše súkromie je pre nás dôležité. Cookies sú šifrované a bezpečne uložené. Neobsahujú citlivé informácie ako heslá alebo platobné údaje.</p>

            <h2>6. Zmeny tejto politiky</h2>
            <p>Táto politika cookies sa môže zmeniť bez predchádzajúceho varovaní. Odporúčame si ju periodicky prečítať, aby ste boli na aktuálnom.</p>

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
