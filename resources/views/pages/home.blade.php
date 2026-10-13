@extends('layouts.app')

@section('title', 'REGEN ŽILINA — Masáže & Pohybová regenerácia v Žiline')
@section('meta_description', 'Profesionálne masáže a pohybová regenerácia v Žiline — relaxačná a športová masáž, bankovanie a kineziotejping. Individuálny prístup a online rezervácia.')
@section('meta_keywords', 'masáže Žilina, masér Žilina, športová masáž Žilina, relaxačná masáž Žilina, pohybová regenerácia Žilina, bankovanie Žilina, kineziotejping, masáž chrbta Žilina, masážny salón Žilina')

@section('content')

{{-- HERO VIDEO --}}
<section class="hero hero--video">
    <div class="hero-video__bg">
        <video autoplay muted loop playsinline preload="metadata" poster="{{ asset('img/regen-client-massage-poster.webp') }}" class="hero-video__el" data-video-start="2">
            <source src="{{ asset('video/regen-client-massage.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-video__overlay"></div>
    </div>
    <div class="container hero-video__inner">
        <div class="hero-video__content">
            <span class="hero-video__label anim-fade">Masáže · Pohybová regenerácia</span>
            <h1 class="hero-video__title anim-fade" data-delay="1">
                Masáže v Žiline<br><span>s odborným prístupom</span>
            </h1>
            <p class="hero-video__text anim-fade" data-delay="2">Odborné masáže a pohybová regenerácia, založené na zdravotníckom vzdelaní. Pomáhame cítiť sa lepšie prostredníctvom odborných masáží a regenerácie.</p>
            <div class="hero-video__actions anim-fade" data-delay="3">
                <a href="{{ route('booking') }}" class="btn btn--white">
                    <span>Rezervovať termín</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="{{ route('services') }}" class="btn btn--ghost">Naše služby</a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="intro">
            <div class="intro__left anim-reveal">
                <span class="label">Prečo REGEN</span>
                <h2 class="h2">Nie sme klasické masážne<br>štúdio</h2>

                <div style="margin-top: 2rem; padding: 1.25rem; background: #f8faf8; border-radius: 8px; border: 1px solid #e0e8e0;">
                    <div style="display: flex; gap: 0.75rem; align-items: center; margin-bottom: 0.5rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="#2d5a3d" stroke="none">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        <span style="font-size: 0.9rem; font-weight: 600; color: #2d5a3d;">Špecializované poradenstvo</span>
                    </div>
                    <p style="font-size: 0.9rem; color: #555; margin: 0; line-height: 1.5;">Individuálne poradenstvo pri výbere masáže a pohybovej regenerácie</p>
                </div>
            </div>

            <div class="intro__right anim-reveal" data-delay="1">
                <p>V našom masážnom štúdiu v centre Žiliny sa venujeme relaxačným a športovým masážam, pohybovej regenerácii a bankovaniu. Každému klientovi venujeme individuálny prístup založený na zdravotníckom vzdelaní. Každé telo je iné, preto nepracujeme podľa šablóny, ale podľa aktuálneho stavu a potrieb klienta.</p>

                <a href="{{ route('about') }}" class="btn btn--primary" style="margin-top: 1.5rem;">
                    Zistiť viac o nás
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>


            </div>
        </div>
    </div>
</section>

<section class="section section--dark">
    <div class="container">
        <div class="section__head anim-reveal">
            <span class="label">Naše služby</span>
            <h2 class="h2">Čo pre vás môžeme urobiť</h2>
        </div>
        <div class="services-preview">
            @foreach($mainServices as $i => $service)
            <a href="{{ route('services') }}" class="sp-card anim-reveal" data-delay="{{ $i }}">
                <span class="sp-card__num">0{{ $i + 1 }}</span>
                <h3 class="sp-card__title">{{ $service->name }}</h3>
                <p class="sp-card__text">{{ $service->description }}</p>
                <div class="sp-card__footer">
                    <span class="sp-card__meta">{{ $service->duration }} min</span>
                    <span class="sp-card__price">{{ number_format($service->price, 0) }}€</span>
                </div>
                <div class="sp-card__arrow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
                </div>
            </a>
            @endforeach
        </div>
        <div class="section__action anim-reveal">
            <a href="{{ route('services') }}" class="btn btn--primary">Všetky služby</a>
        </div>
    </div>
</section>

{{-- TEXT MARQUEE --}}
<div class="text-marquee">
    <div class="text-marquee__track">
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Doprajte si regeneráciu</span>
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Výmenný lístok nie je potrebný</span>
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Regenerácia na vyššej úrovni</span>
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Úprimná snaha pomôcť</span>
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Bez čakania, na objednávku</span>
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Individuálny prístup</span>
        {{-- duplikácia --}}
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Doprajte si regeneráciu</span>
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Výmenný lístok nie je potrebný</span>
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Regenerácia na vyššej úrovni</span>
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Úprimná snaha pomôcť</span>
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Bez čakania, na objednávku</span>
        <span class="text-marquee__item"><svg class="text-marquee__icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Individuálny prístup</span>
    </div>
</div>

{{-- VIZUALIZÁCIA MASÁŽE --}}
<section class="section section--green massage-viz">
    <div class="container">
        <div class="section__head anim-reveal" style="text-align:center;">
            <span class="label">Ako pracujeme</span>
            <h2 class="h2">Čo sa deje počas masáže</h2>
        </div>

        <div class="mviz anim-reveal">
            <div class="mviz__scene">
                <svg class="mviz__svg" viewBox="0 0 600 700" fill="none" xmlns="http://www.w3.org/2000/svg">
                    {{-- Chrbtica --}}
                    <path class="mviz__spine" d="M300 40 Q297 130 300 220 Q303 310 300 400 Q297 490 300 580" stroke="rgba(107,127,94,0.2)" stroke-width="4" stroke-linecap="round"/>

                    {{-- Svalové vrstvy --}}
                    <path class="mviz__muscle mviz__muscle--l" d="M300 60 Q200 120 170 260 Q155 350 190 480 Q220 560 300 600" stroke="rgba(107,127,94,0.1)" stroke-width="60" stroke-linecap="round" fill="none"/>
                    <path class="mviz__muscle mviz__muscle--r" d="M300 60 Q400 120 430 260 Q445 350 410 480 Q380 560 300 600" stroke="rgba(107,127,94,0.1)" stroke-width="60" stroke-linecap="round" fill="none"/>

                    {{-- Napätie body (pred masážou — červené) --}}
                    <circle class="mviz__tension" cx="230" cy="150" r="18" data-phase="tension"/>
                    <circle class="mviz__tension" cx="370" cy="180" r="15" data-phase="tension"/>
                    <circle class="mviz__tension" cx="240" cy="300" r="20" data-phase="tension"/>
                    <circle class="mviz__tension" cx="360" cy="360" r="16" data-phase="tension"/>
                    <circle class="mviz__tension" cx="250" cy="460" r="19" data-phase="tension"/>
                    <circle class="mviz__tension" cx="350" cy="510" r="15" data-phase="tension"/>

                    {{-- Uvoľnenie vlny --}}
                    <circle class="mviz__wave mviz__wave--1" cx="300" cy="170" r="0"/>
                    <circle class="mviz__wave mviz__wave--2" cx="300" cy="330" r="0"/>
                    <circle class="mviz__wave mviz__wave--3" cx="300" cy="490" r="0"/>

                    {{-- Ruky maséra --}}
                    <g class="mviz__hand mviz__hand--l">
                        <ellipse cx="210" cy="240" rx="48" ry="26" transform="rotate(-20 210 240)"/>
                        <ellipse cx="182" cy="225" rx="15" ry="9" transform="rotate(-30 182 225)"/>
                    </g>
                    <g class="mviz__hand mviz__hand--r">
                        <ellipse cx="390" cy="240" rx="48" ry="26" transform="rotate(20 390 240)"/>
                        <ellipse cx="418" cy="225" rx="15" ry="9" transform="rotate(30 418 225)"/>
                    </g>

                    {{-- Šípky pohybu --}}
                    <path class="mviz__stroke mviz__stroke--1" d="M180 170 Q210 110 260 90" stroke-width="3" stroke-linecap="round"/>
                    <path class="mviz__stroke mviz__stroke--2" d="M420 170 Q390 110 340 90" stroke-width="3" stroke-linecap="round"/>
                    <path class="mviz__stroke mviz__stroke--3" d="M160 400 Q200 340 260 320" stroke-width="3" stroke-linecap="round"/>
                    <path class="mviz__stroke mviz__stroke--4" d="M440 400 Q400 340 340 320" stroke-width="3" stroke-linecap="round"/>

                    {{-- Uvoľnené častice --}}
                    <circle class="mviz__particle mviz__particle--1" cx="220" cy="180" r="5"/>
                    <circle class="mviz__particle mviz__particle--2" cx="380" cy="210" r="4"/>
                    <circle class="mviz__particle mviz__particle--3" cx="235" cy="340" r="5"/>
                    <circle class="mviz__particle mviz__particle--4" cx="365" cy="390" r="4"/>
                    <circle class="mviz__particle mviz__particle--5" cx="260" cy="490" r="5"/>
                    <circle class="mviz__particle mviz__particle--6" cx="340" cy="270" r="4"/>
                    <circle class="mviz__particle mviz__particle--7" cx="230" cy="430" r="4"/>
                    <circle class="mviz__particle mviz__particle--8" cx="370" cy="470" r="5"/>
                </svg>
            </div>

            <div class="mviz__info">
                <div class="mviz__phase mviz__phase--active" data-phase="1">
                    <span class="mviz__phase-label">Fáza 1</span>
                    <h3>Identifikácia napätia</h3>
                    <p>Ruky maséra vyhľadávajú miesta so zvýšeným svalovým napätím. Červené body znázorňujú miesta, na ktoré sa masáž zameriava.</p>
                </div>
                <div class="mviz__phase" data-phase="2">
                    <span class="mviz__phase-label">Fáza 2</span>
                    <h3>Hĺbková práca</h3>
                    <p>Cieleným tlakom a ťahmi uvoľňujeme fascie a svalové tkanivo. Techniky sa prispôsobujú podľa typu masáže — od jemných po intenzívne.</p>
                </div>
                <div class="mviz__phase" data-phase="3">
                    <span class="mviz__phase-label">Fáza 3</span>
                    <h3>Uvoľnenie a regenerácia</h3>
                    <p>Napätie sa rozpúšťa, zlepšuje sa krvný obeh a lymfatický tok. Telo sa regeneruje a obnovuje svoju prirodzenú rovnováhu.</p>
                </div>
            </div>
        </div>

        <div class="mviz__controls anim-reveal">
            <button class="mviz__btn mviz__btn--active" data-phase="1">Napätie</button>
            <button class="mviz__btn" data-phase="2">Masáž</button>
            <button class="mviz__btn" data-phase="3">Uvoľnenie</button>
        </div>
    </div>
</section>


{{-- TESTIMONIALS --}}
@php
$googleReviews = [
    ['name' => 'monika behanova', 'rating' => 5, 'time' => 'pred 5 dňami', 'text' => 'Ďakujem za milý a profesionálny prístup a tiež za skutočne výbornú masáž po ktorej sa cítim vždy uvoľnene a oddýchnuto. Dokonca už po prvej masáži som pocítila výrazný ústup ťažkostí, ktoré som mávala skoro každý deň. Určite odporúčam navštíviť toto miesto každému kto hľadá odbornú masáž a kde sa vám snažia aj skutočne pomôcť.'],
    ['name' => 'MDDr.Peter Schnierer', 'rating' => 5, 'time' => 'pred týždňom', 'text' => ''],
    ['name' => 'Zuzana Gašpieriková', 'rating' => 5, 'time' => 'pred 3 mesiacmi', 'text' => 'Salón má veľmi príjemnú a upokojujúcu atmosféru, kde sa človek cíti dobre už od prvého momentu. Masér Daniel je profesionál s výborným prístupom, je milý, pozorný a svoju prácu robí s maximálnou starostlivosťou. Masáž prispôsobil mojim potrebám a po jej skončení som sa cítila dokonale uvoľnene a plná novej energie. Určite odporúčam každému, kto hľadá kvalitné služby a skutočný oddych.'],
    ['name' => 'Marharyta Pam', 'rating' => 5, 'time' => 'pred 3 mesiacmi', 'text' => 'Velmi pekne ďakujem za profesionálnu masáž. Príjemná atmosféra, individuálny prístup a skvelá starostlivosť mi pomohli dokonale sa uvoľniť. Masáž bola naozaj kvalitná a cítila som sa po nej oveľa lepšie. Určite odporúčam každému, kto hľadá skúseného a ochotného maséra. Ešte raz ďakujem a teším sa na ďalšiu návštevu!'],
    ['name' => 'Lubos Černák', 'rating' => 5, 'time' => 'pred 3 mesiacmi', 'text' => 'Masáž bola top! Odbornosť ale aj príjemná komunikácia a prostredie. Prišiel som s boľavým chrbtom a po sedení som odišiel uplne uvoľnený. Dnes som sa znovu vratil v ramci prevencie. Pri mojej práci (čašník) mi tieto preventívne návštevy pomáhajú byť v kondícii pri každodennom fungovaní.'],
    ['name' => 'Miroslava Bucková', 'rating' => 5, 'time' => 'pred 6 mesiacmi', 'text' => 'Veľmi príjemná masaž. Perfekný profesionálny prístup, zhodnotenie zdravotného stavu a riešenie konkretného problému. Určite odporúčam.🙏'],
    ['name' => 'tatiana cernakova', 'rating' => 5, 'time' => 'pred 3 mesiacmi', 'text' => 'Veľká spokojnosť. 😊 Cítila som sa veľmi príjemne a v dobrých rukách. Masáž mi pomohla uvoľniť stuhnuté svaly a na chvíľu vypnúť.Určite prídem znova. 💖'],
    ['name' => 'Jakub Gazdík', 'rating' => 5, 'time' => 'pred 4 mesiacmi', 'text' => 'Odbornosť, komunikácia, príjemné prostredie. V skratke, terapeut, ktorý robí svoju prácu poctivo a venuje Vám čas a pozornosť. Pozitívne hodnotenie si plne zaslúži. :)'],
    ['name' => 'Marek Keblovský', 'rating' => 5, 'time' => 'pred 7 mesiacmi', 'text' => 'Moja prvá masáž a zároveň nie posledná 💪 perfektný prístup a profesionalita. Odišiel som úplne zregenerovaný. Odporúčam'],
    ['name' => 'Marek Svoboda', 'rating' => 5, 'time' => 'pred 7 mesiacmi', 'text' => 'Bol som na masáži v salóne Regen a musím povedať, že som bol veľmi spokojný. Mal som masáž s bankami, ktorá bola veľmi príjemná a zároveň mi pomohla s mojou boľavou lopatkou. Prostredie salónu je príjemné, čisté, pekné a moderné. Celková atmosféra je veľmi uvoľňujúca. Určite odporúčam každému, kto hľadá profesionálnu a príjemnú masáž. ⭐⭐⭐⭐⭐'],
    ['name' => 'Patrik Bačinský', 'rating' => 5, 'time' => 'pred 7 mesiacmi', 'text' => 'Masáž na top úrovni! 👌 Profesionálny prístup, príjemná atmosféra a odchádzal som úplne zresetovaný. Určite odporúčam a rád sa vrátim.🔥'],
    ['name' => 'Ivana Bartošová', 'rating' => 5, 'time' => 'pred 8 mesiacmi', 'text' => 'Ocenujem profesionálny prístup, čistý a príjemný minimalistický priestor navodený na relax. Masér Daniel mi výrazne pomohol najmä v oblasti hrudnej a krčnej chrbtice, pracoval precízne s mobilizáciou, myofasciálnymi technikami aj spúšťovými bodmi. Výsledkom bolo hlboké uvoľnenie tela a veľká úľava pre preťažené ruky. Ako masérka a lektorka viem oceniť kvalitu práce REGEN a Daniela jednoznačne odporúčam. 👌'],
    ['name' => 'Ema Macková', 'rating' => 5, 'time' => 'pred 4 mesiacmi', 'text' => 'Profesionálny, milý prístup pána maséra. Vždy pomohol, uľavil od bolesti. Určite sa budem vracať naďalej do tychto rúk.'],
    ['name' => 'Naďa Papánová', 'rating' => 5, 'time' => 'pred 5 mesiacmi', 'text' => 'individuálny prístup, profesionalita, príjemná atmosféra už od prvého momentu, určite odporúčam a opäť prídem :)'],
    ['name' => 'Marián Slaboň', 'rating' => 5, 'time' => 'pred 6 mesiacmi', 'text' => 'Skvelá skúsenosť v Žiline. Daniel rozumie anatómii, vie presne, kde uvoľniť a napraviť. Pomohol mi vrátiť sa k športu po úraze na motorke. Profesionálna robota. Môžem len odporučiť.'],
    ['name' => 'Michal Kubík', 'rating' => 5, 'time' => 'pred 4 mesiacmi', 'text' => 'Vrelo odporúčam bol som a veľmi spokojný 👍👍👍'],
    ['name' => 'Lenka M', 'rating' => 5, 'time' => 'pred 5 mesiacmi', 'text' => 'Príjemné prostredie, profesionálny prístup, max spokojnosť, urcite odporúčam :)'],
    ['name' => 'Tomas Belan', 'rating' => 5, 'time' => 'pred 7 mesiacmi', 'text' => 'Príjemne prostredie, profesionálne jednanie a taktiež samotná masáž. Odporúčam👌👌👌'],
    ['name' => 'Emil Gabčík', 'rating' => 4, 'time' => 'pred 7 mesiacmi', 'text' => 'Super skúsenosť, pekný prístup a zhovievavosť, určite by som pána odporúčil.'],
    ['name' => 'miroslava sedlakova', 'rating' => 5, 'time' => 'pred 6 mesiacmi', 'text' => 'Masáž bola úplne úžasná, milý a profesionálny prístup, príjemné prostredie. Rada sa opäť vrátim, určite odporúčam😊'],
];
$avatarPalette = ['#53614a', '#7d9270', '#C9A96E', '#8a6d4f', '#6b8f8a', '#a3785f', '#4d6b5e', '#9a7d9e'];
$reviewCount = count($googleReviews);
$avgRating = round(array_sum(array_column($googleReviews, 'rating')) / $reviewCount, 1);

$googleGLogo = '<svg viewBox="0 0 48 48" width="18" height="18" aria-hidden="true"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24s.85 6.91 2.34 9.88l7.35-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/></svg>';
$starIcon = '<path d="M12 2.5l2.9 6.06 6.6.79-4.87 4.6 1.28 6.55L12 17.27l-5.91 3.23 1.28-6.55-4.87-4.6 6.6-.79z"/>';
@endphp
<section class="testimonials">
    <div class="container">
        <div class="section__head anim-reveal" style="text-align:center;">
            <span class="label">Recenzie</span>
            <h2 class="h2">Čo hovoria naši klienti</h2>

            <div class="testi__gsummary">
                {!! $googleGLogo !!}
                <span class="testi__gsummary-score">{{ str_replace('.', ',', $avgRating) }}</span>
                <span class="testi__gcard-stars">
                    @for($s = 1; $s <= 5; $s++)
                        <svg class="testi__star-icon {{ $s <= round($avgRating) ? 'is-filled' : '' }}" viewBox="0 0 24 24" width="16" height="16">{!! $starIcon !!}</svg>
                    @endfor
                </span>
                <span class="testi__gsummary-count">{{ $reviewCount }} recenzií na Google</span>
            </div>
        </div>
    </div>

    <div class="testi__marquee anim-reveal">
        <div class="testi__marquee-track">
            @foreach(array_merge($googleReviews, $googleReviews) as $review)
            <div class="testi__marquee-item">
                <div class="testi__gcard-head">
                    <div class="testi__gcard-avatar" style="background: {{ $avatarPalette[crc32($review['name']) % count($avatarPalette)] }};">
                        {{ mb_strtoupper(mb_substr($review['name'], 0, 1)) }}
                    </div>
                    <div class="testi__gcard-info">
                        <span class="testi__gcard-name">{{ $review['name'] }}</span>
                        <span class="testi__gcard-source">
                            {!! $googleGLogo !!}
                            Zdroj recenzie: Google
                        </span>
                    </div>
                </div>
                <div class="testi__gcard-meta">
                    <span class="testi__gcard-stars">
                        @for($s = 1; $s <= 5; $s++)
                            <svg class="testi__star-icon {{ $s <= $review['rating'] ? 'is-filled' : '' }}" viewBox="0 0 24 24" width="14" height="14">{!! $starIcon !!}</svg>
                        @endfor
                    </span>
                    <span class="testi__gcard-time">· {{ $review['time'] }}</span>
                </div>
                @if($review['text'] !== '')
                <p class="testi__marquee-text">{{ $review['text'] }}</p>
                <button type="button" class="testi__more" aria-expanded="false" hidden>Zobraziť celú recenziu</button>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>



@endsection
