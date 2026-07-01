@extends('layouts.app')
@section('title', 'Služby — Masáže, Terapia & Regenerácia | REGEN ŽILINA')
@section('meta_description', 'Kompletná ponuka služieb REGEN ŽILINA — relaxačná masáž, športová masáž, manuálna terapia, baňkovanie, kineziotejping a maderoterapia. Prezrite si detaily a rezervujte online.')
@section('meta_keywords', 'relaxačná masáž Žilina, športová masáž Žilina, manuálna terapia, baňkovanie Žilina, kineziotejping Žilina, maderoterapia, masáž chrbta, masáž krku, trigger point terapia')

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
                    <span class="svc-detail__tag">Baňkovanie</span>
                    <span class="svc-detail__tag">Uvoľnenie napätia</span>
                </div>
                <div class="svc-detail__body">
                    <div class="svc-detail__desc">
                        <p>Kombinovaná relaxačná masáž celého tela s prvkami baňkovania. Ideálna voľba pre tých, ktorí hľadajú úľavu od každodenného stresu a napätia. Masáž pracuje s dlhými, plynulými ťahmi, ktoré uvoľňujú povrchové svalové napätie a zlepšujú krvný obeh.</p>
                        <p style="margin-top: 12px;">Baňkovanie sa aplikuje na problémové oblasti — najčastejšie chrbát a ramená — pre hlbšie uvoľnenie fascií a svalového tkaniva. Výsledkom je pocit hlbokého uvoľnenia a regenerácie.</p>
                    </div>
                    <div class="svc-detail__features">
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Relaxačná masáž celého tela</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Baňkovanie na problémové partie</span>
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
                        <p style="margin-top: 12px;">Využívame techniky športovej masáže, strečing, triggerpoint terapiu a prácu s fasciami. Cieľom je urýchliť regeneráciu po tréningu, zlepšiť rozsah pohybu a predísť zraneniam. Ideálne pred alebo po súťažiach a náročných tréningových blokoch.</p>
                    </div>
                    <div class="svc-detail__features">
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Hĺbková masáž preťažených svalov</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Triggerpoint terapia a strečing</span>
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
                            <span>Prevencia zranení a svalových dysbalancií</span>
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
                    <span class="svc-detail__tag">Bolesti chrbta</span>
                    <span class="svc-detail__tag">MFR</span>
                    <span class="svc-detail__tag">Mobilizácia</span>
                </div>
                <div class="svc-detail__body">
                    <div class="svc-detail__desc">
                        <p>Terapeutická hodina zameraná na riešenie konkrétneho problému. Na začiatku vykonáme krátke vyšetrenie a diagnostiku — zistíme, kde je skutočná príčina vašich ťažkostí, nie len symptóm. Následne pracujeme cielene na danej oblasti.</p>
                        <p style="margin-top: 12px;">Využívame myofasciálne uvoľnenie (MFR), mobilizáciu kĺbov, postizometrickú relaxáciu (PIR), mäkké techniky a hĺbkovú tkanivovú prácu. Ideálne pri chronických bolestiach chrbta, krku, hlavy, pri blokádach a obmedzenom rozsahu pohybu. Odporúčame sériu 3–5 návštev pre trvalý efekt.</p>
                    </div>
                    <div class="svc-detail__features">
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Vstupná diagnostika a vyšetrenie</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Myofasciálne uvoľnenie (MFR)</span>
                        </div>
                        <div class="svc-detail__feature">
                            <span class="svc-detail__feature-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span>Mobilizácia kĺbov a chrbtice</span>
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
                        <p>Aplikácia elastického kineziotejpu na problémové oblasti. Tejp podporuje správnu funkciu svalov, znižuje opuch, stabilizuje kĺby a predlžuje efekt masáže alebo terapie. Najčastejšie aplikujeme na krčnú chrbticu, ramená, kolená a bedrovú oblasť.</p>
                        <p style="margin-top: 12px;">Ideálna doplnková služba po REGEN THERAPY alebo REGEN SPORT. Tejp drží na tele 3–5 dní a pracuje nepretržite — podporuje hojenie aj počas bežných denných aktivít.</p>
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
