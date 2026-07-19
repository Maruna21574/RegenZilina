@extends('layouts.app')
@section('title', 'Služby — Masáže, Terapia & Regenerácia | REGEN ŽILINA')
@section('meta_description', 'Kompletná ponuka služieb REGEN ŽILINA — relaxačná a športová masáž, pohybová regenerácia, bankovanie, kineziotejping a maderoterapia. Rezervujte online.')
@section('meta_keywords', 'relaxačná masáž Žilina, športová masáž Žilina, pohybová regenerácia Žilina, bankovanie Žilina, kineziotejping Žilina, maderoterapia, masáž chrbta, masáž krku, uvoľnenie svalového napätia')

@section('content')

<section class="page-hero page-hero--short" style="background-image: url('{{ asset("img/pexels-koolshooters-6628615.webp") }}')">
    <div class="container">
        <span class="label label--light anim-fade">Služby</span>
        <h1 class="page-hero__title anim-fade" data-delay="1">Nájdite to pravé<br><span>pre vaše telo</span></h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section__head anim-reveal">
            <div style="background: linear-gradient(135deg, rgba(45, 90, 61, 0.05) 0%, rgba(45, 90, 61, 0.02) 100%); border-left: 4px solid #2d5a3d; padding: 1.5rem; border-radius: 8px; margin-bottom: 2.5rem;">
                <div style="display: flex; align-items: flex-start; gap: 1rem;">
                    <div style="flex-shrink: 0; margin-top: 2px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2d5a3d" stroke-width="2">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 style="font-size: 1.05rem; font-weight: 600; color: #2d5a3d; margin: 0 0 0.5rem 0;">Špecializované poradenstvo</h3>
                        <p style="font-size: 0.95rem; color: #555; margin: 0; line-height: 1.6;">Individuálne poradenstvo pri výbere masáže a pohybovej regenerácie</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="svc-detail">

            {{-- REGEN RELAX --}}
            <div class="svc-detail__item anim-reveal">
                <div class="svc-detail__top">
                    <div>
                        <div class="svc-detail__num">01</div>
                        <h3 class="svc-detail__name">REGEN RELAX</h3>
                    </div>
                    <div class="svc-detail__price-block">
                        <span class="svc-detail__duration">60 minút</span>
                        <span class="svc-detail__price">40€</span>
                    </div>
                </div>
                <div class="svc-detail__tags">
                    <span class="svc-detail__tag">Relaxácia</span>
                    <span class="svc-detail__tag">Bankovanie</span>
                    <span class="svc-detail__tag">Uvoľnenie napätia</span>
                </div>
                <div class="svc-detail__body">
                    <div class="svc-detail__desc">
                        <p>Kombinovaná relaxačná masáž zameraná najmä na vrchnú časť tela — chrbát, ramená a krčnú oblasť — s prvkami bankovania. Je ideálnou voľbou na oddych od každodenného stresu a napätia. Masáž pracuje s dlhými, plynulými ťahmi zameranými na uvoľnenie a celkovú regeneráciu.</p>
                        <p style="margin-top: 12px;">Bankovanie sa aplikuje na vybrané oblasti chrbta a ramien ako súčasť masáže zameranej na uvoľnenie a regeneráciu.</p>
                    </div>
                    <div class="svc-detail__features">
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Relaxačná masáž chrbta, ramien a krčnej oblasti</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Bankovanie na vybrané partie</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Zlepšenie krvného obehu a lymfy</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Redukcia stresu a psychického napätia</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Vhodné aj pre prvú návštevu</span>
                        </div>
                    </div>
                </div>
                <div class="svc-detail__cta">
                    <a href="{{ route('booking') }}?service=1" class="btn btn--primary btn--sm">
                        <span>Rezervovať REGEN RELAX</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            </div>

            {{-- REGEN SPORT --}}
            <div class="svc-detail__item anim-reveal">
                <div class="svc-detail__top">
                    <div>
                        <div class="svc-detail__num">02</div>
                        <h3 class="svc-detail__name">REGEN SPORT</h3>
                    </div>
                    <div class="svc-detail__price-block">
                        <span class="svc-detail__duration">60 minút</span>
                        <span class="svc-detail__price">50€</span>
                    </div>
                </div>
                <div class="svc-detail__tags">
                    <span class="svc-detail__tag">Športovci</span>
                    <span class="svc-detail__tag">Regenerácia svalov</span>
                    <span class="svc-detail__tag">Fyzická záťaž</span>
                </div>
                <div class="svc-detail__body">
                    <div class="svc-detail__desc">
                        <p>Intenzívna regeneračná masáž navrhnutá špeciálne pre športovcov a ľudí s fyzicky náročným zamestnaním. Pracujeme s hlbším tlakom a cielenou prácou na preťažených svalových skupinách — najčastejšie dolný chrbát, nohy, ramená a krk.</p>
                        <p style="margin-top: 12px;">Využívame techniky športovej masáže, strečing, cielenú prácu s napätými miestami vo svaloch a prácu s fasciami. Cieľom je podporiť regeneráciu po tréningu a pohyblivosť tela. Ideálne pred alebo po súťažiach a náročných tréningových blokoch.</p>
                    </div>
                    <div class="svc-detail__features">
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Hĺbková masáž preťažených svalov</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Cielená práca so svalovým napätím a strečing</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Práca s fasciami a mäkkými tkanivami</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Rýchlejšia regenerácia po záťaži</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Starostlivosť o namáhané svalové partie</span>
                        </div>
                    </div>
                </div>
                <div class="svc-detail__cta">
                    <a href="{{ route('booking') }}?service=2" class="btn btn--primary btn--sm">
                        <span>Rezervovať REGEN SPORT</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            </div>

            {{-- REGEN THERAPY --}}
            <div class="svc-detail__item anim-reveal">
                <div class="svc-detail__top">
                    <div>
                        <div class="svc-detail__num">03</div>
                        <h3 class="svc-detail__name">REGEN THERAPY</h3>
                    </div>
                    <div class="svc-detail__price-block">
                        <span class="svc-detail__duration">60 minút</span>
                        <span class="svc-detail__price">58€</span>
                    </div>
                </div>
                <div class="svc-detail__tags">
                    <span class="svc-detail__tag">Terapia</span>
                    <span class="svc-detail__tag">Regenerácia chrbta</span>
                    <span class="svc-detail__tag">MFR</span>
                    <span class="svc-detail__tag">Pohybové prvky</span>
                </div>
                <div class="svc-detail__body">
                    <div class="svc-detail__desc">
                        <p>Individuálna hodina zameraná na pohybovú regeneráciu podľa aktuálnych potrieb klienta. Na začiatku sa porozprávame o vašich potrebách a následne sa cielene venujeme vybraným oblastiam tela.</p>
                        <p style="margin-top: 12px;">Využívame myofasciálne uvoľnenie (MFR), jemné mobilizačné techniky, mäkké techniky a hĺbkovú tkanivovú prácu. Súčasťou regenerácie mäkkých tkanív môžu byť aj uvoľňovacie techniky svalov vrátane postizometrickej relaxácie (PIR). Rozsah a kombináciu techník prispôsobujeme individuálne.</p>
                    </div>
                    <div class="svc-detail__features">
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Úvodná konzultácia potrieb</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Myofasciálne uvoľnenie (MFR)</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Jemné mobilizačné techniky</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>PIR a mäkké tkanivové techniky</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Individuálny plán a odporúčania</span>
                        </div>
                    </div>
                </div>
                <div class="svc-detail__cta">
                    <a href="{{ route('booking') }}?service=3" class="btn btn--primary btn--sm">
                        <span>Rezervovať REGEN THERAPY</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section section--soft">
    <div class="container">
        <div class="section__head anim-reveal">
            <span class="label">Doplnkové služby</span>
        </div>

        <div class="svc-detail">

            {{-- KINEZIOTEJPING --}}
            <div class="svc-detail__item anim-reveal">
                <div class="svc-detail__top">
                    <div>
                        <div class="svc-detail__num">04</div>
                        <h3 class="svc-detail__name">KINEZIOTEJPING</h3>
                    </div>
                    <div class="svc-detail__price-block">
                        <span class="svc-detail__duration">15 minút</span>
                        <span class="svc-detail__price">10€</span>
                    </div>
                </div>
                <div class="svc-detail__tags">
                    <span class="svc-detail__tag">Podpora svalov</span>
                    <span class="svc-detail__tag">Doplnok k masáži</span>
                </div>
                <div class="svc-detail__body">
                    <div class="svc-detail__desc">
                        <p>Aplikácia elastického kineziotejpu na vybrané oblasti tela ako podporného doplnku k masáži. Najčastejšie ho aplikujeme na krčnú oblasť, ramená, kolená a bedrovú oblasť.</p>
                        <p style="margin-top: 12px;">Doplnková služba po REGEN THERAPY alebo REGEN SPORT. Tejp môže na tele zostať 3–5 dní podľa individuálnej znášanlivosti.</p>
                        <p style="margin-top: 12px;"><strong>Kineziotejp poskytujeme iba ako podporný doplnok bez deklarovania stabilizačných alebo iných zdravotných účinkov.</strong></p>
                    </div>
                    <div class="svc-detail__features">
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Podpora svalov a kĺbov</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Predĺženie efektu terapie</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Vydrží 3–5 dní, vodoodolný</span>
                        </div>
                    </div>
                </div>
                <div class="svc-detail__cta">
                    <a href="{{ route('booking') }}?service=4" class="btn btn--primary btn--sm">
                        <span>Rezervovať</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            </div>

            {{-- MADEROTERAPIA --}}
            <div class="svc-detail__item anim-reveal">
                <div class="svc-detail__top">
                    <div>
                        <div class="svc-detail__num">05</div>
                        <h3 class="svc-detail__name">MADEROTERAPIA</h3>
                    </div>
                    <div class="svc-detail__price-block">
                        <span class="svc-detail__duration">40 minút</span>
                        <span class="svc-detail__price">35€</span>
                    </div>
                </div>
                <div class="svc-detail__tags">
                    <span class="svc-detail__tag">Drevené nástroje</span>
                    <span class="svc-detail__tag">Modelovanie</span>
                    <span class="svc-detail__tag">Celulitída</span>
                </div>
                <div class="svc-detail__body">
                    <div class="svc-detail__desc">
                        <p>Masáž špeciálnymi drevenými nástrojmi rôznych tvarov a veľkostí. Maderoterapia je prírodná technika, ktorá intenzívne stimuluje lymfatický systém, zlepšuje krvný obeh a pomáha rozbiť tukové zhluky a celulitídu.</p>
                        <p style="margin-top: 12px;">Používa sa na modelovanie postavy — stehná, brucho, boky, ruky. Pravidelné sedenia viditeľne zlepšujú textúru pokožky, spevňujú telo a podporujú detoxikáciu organizmu. Pre najlepšie výsledky odporúčame sériu 8–10 ošetrení.</p>
                    </div>
                    <div class="svc-detail__features">
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Redukcia celulitídy a tukových zhlukov</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Modelovanie a spevnenie tela</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Stimulácia lymfatického systému</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>100% prírodná technika, bez chémie</span>
                        </div>
                    </div>
                </div>
                <div class="svc-detail__cta">
                    <a href="{{ route('booking') }}?service=5" class="btn btn--primary btn--sm">
                        <span>Rezervovať</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
