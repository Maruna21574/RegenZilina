@extends('layouts.app')

@section('title', 'REGEN ŽILINA — Masáže, Manuálna terapia & Regenerácia v Žiline')
@section('meta_description', 'Profesionálne masáže v Žiline — športová masáž, relaxačná masáž, manuálna terapia, bankovanie a kineziotejping. Individuálny prístup, online rezervácia termínu.')
@section('meta_keywords', 'masáže Žilina, masér Žilina, športová masáž Žilina, relaxačná masáž Žilina, manuálna terapia Žilina, bankovanie Žilina, kineziotejping, masáž chrbta Žilina, regenerácia Žilina, masážny salón Žilina')

@section('content')

{{-- HERO VIDEO --}}
<section class="hero hero--video">
    <div class="hero-video__bg">
        <video autoplay muted loop playsinline preload="metadata" poster="{{ asset('img/foto_1.webp') }}" class="hero-video__el">
            <source src="{{ asset('video/regen_video.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-video__overlay"></div>
    </div>
    <div class="container hero-video__inner">
        <div class="hero-video__content">
            <h1 class="hero-video__title anim-fade" data-delay="1">
                Doprajte svojmu telu<br><span>čo si zaslúži</span>
            </h1>
            <p class="hero-video__text anim-fade" data-delay="2">Odborné masáže a pohybová regenerácia, založené na zdravotníckom vzdelaní. Pomáhame cítiť sa lepšie prostredíctvom odborných masáží a regenerácie.</p>
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
                <p>Každému klientovi venujeme individuálny prístup založený na zdravotníckom vzdelaní, odborných masážach a pohybovej regenerácii. Každé telo je iné, preto nepracujeme podľa šablóny, ale podľa aktuálneho stavu a potrieb klienta.</p>

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
<section class="testimonials">
    <div class="container">
        <div class="section__head anim-reveal" style="text-align:center;">
            <span class="label">Recenzie</span>
            <h2 class="h2">Čo hovoria naši klienti</h2>
        </div>
    </div>

    <div class="testi__marquee anim-reveal">
        <div class="testi__marquee-track">
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Po návšteve som sa cítil uvoľnenejšie. Profesionálny prístup na úplne inej úrovni."</p>
                <span class="testi__marquee-name">— Martin K.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Najlepšia športová masáž, akú som kedy mala. Prístup presne zodpovedal mojim potrebám. Odporúčam každému bežcovi."</p>
                <span class="testi__marquee-name">— Zuzana P.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Chodím pravidelne na relaxačnú masáž. Vždy odchádzam úplne uvoľnená. Prostredie je príjemné a čisté."</p>
                <span class="testi__marquee-name">— Eva M.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Ocenil som individuálny prístup, príjemné prostredie a dôkladnú prácu. Konečne viem, kam chodiť."</p>
                <span class="testi__marquee-name">— Peter S.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Najlepšie peniaze, ktoré som investoval do zdravia. Super prístup, skutočný profesionál."</p>
                <span class="testi__marquee-name">— Róbert H.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Po prvej návšteve som vedela, že sa vrátim. Konečne masáž, ktorá naozaj pomáha."</p>
                <span class="testi__marquee-name">— Andrea Š.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Prídem vždy, keď mi dá telo zabrať. Odporúčam aj svojej rodine."</p>
                <span class="testi__marquee-name">— Lucia K.</span>
            </div>
            {{-- duplikácia pre plynulý loop --}}
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Po návšteve som sa cítil uvoľnenejšie. Profesionálny prístup na úplne inej úrovni."</p>
                <span class="testi__marquee-name">— Martin K.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Najlepšia športová masáž, akú som kedy mala. Prístup presne zodpovedal mojim potrebám. Odporúčam každému bežcovi."</p>
                <span class="testi__marquee-name">— Zuzana P.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Chodím pravidelne na relaxačnú masáž. Vždy odchádzam úplne uvoľnená. Prostredie je príjemné a čisté."</p>
                <span class="testi__marquee-name">— Eva M.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Ocenil som individuálny prístup, príjemné prostredie a dôkladnú prácu. Konečne viem, kam chodiť."</p>
                <span class="testi__marquee-name">— Peter S.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Najlepšie peniaze, ktoré som investoval do zdravia. Super prístup, skutočný profesionál."</p>
                <span class="testi__marquee-name">— Róbert H.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Po prvej návšteve som vedela, že sa vrátim. Konečne masáž, ktorá naozaj pomáha."</p>
                <span class="testi__marquee-name">— Andrea Š.</span>
            </div>
            <div class="testi__marquee-item">
                <div class="testi__marquee-stars">★★★★★</div>
                <p class="testi__marquee-text">„Prídem vždy, keď mi dá telo zabrať. Odporúčam aj svojej rodine."</p>
                <span class="testi__marquee-name">— Lucia K.</span>
            </div>
        </div>
    </div>
</section>



@endsection
