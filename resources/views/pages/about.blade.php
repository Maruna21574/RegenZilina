@extends('layouts.app')
@section('title', 'O nás — REGEN ŽILINA | Profesionálne masáže v Žiline')
@section('meta_description', 'Spoznajte REGEN ŽILINA — tím skúsených terapeutov špecializovaných na masáže, manuálnu terapiu a regeneráciu. Viac ako 5 rokov skúseností, individuálny prístup ku každému klientovi.')
@section('meta_keywords', 'masáže Žilina, masér Žilina, manuálny terapeut Žilina, o nás REGEN, masážne štúdio Žilina, skúsený masér, fyzioterapia Žilina')

@section('content')

<section class="page-hero page-hero--short" style="background-image: url('{{ asset("img/pexels-koolshooters-6628690.webp") }}')">
    <div class="container">
        <span class="label label--light anim-fade">O nás</span>
        <h1 class="page-hero__title anim-fade" data-delay="1">Starostlivosť, ktorej<br><span>môžete dôverovať</span></h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-grid__text anim-reveal">
                <h2 class="h2">Kto sme</h2>
                <p>V <strong>REGEN ŽILINA</strong> sa venujeme komplexnej regenerácii, masážam, manuálnym technikám a bankovaniu.</p>
                <p>Každá procedúra je prispôsobená individuálne podľa vašich potrieb a aktuálneho stavu.</p>
                <p>Pracujeme v modernom a príjemnom prostredí, kde sa môžete plne uvoľniť a sústrediť sa na svoju regeneráciu.</p>
            </div>
            <div class="about-grid__visual anim-reveal" data-delay="1">
                <div class="about-visual">
                    <div class="about-visual__block about-visual__block--1">
                        <img src="{{ asset('img/foto_1.webp') }}" alt="Profesionálna masáž v REGEN ŽILINA — manuálna terapia chrbta" loading="lazy">
                    </div>
                    <div class="about-visual__block about-visual__block--2">
                        <img src="{{ asset('img/foto_2.webp') }}" alt="Interiér masážneho štúdia REGEN ŽILINA" loading="lazy">
                    </div>
                    <div class="about-visual__stat">
                        <span>5+</span>
                        rokov skúseností
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--green">
    <div class="container">
        <div class="section__head anim-reveal">
            <span class="label label--light">Naše hodnoty</span>
            <h2 class="h2 h2--light">Čo nás odlišuje</h2>
        </div>
        <div class="values-grid">
            <div class="value-card anim-reveal">
                <div class="value-card__icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 15l-2 5l9-11h-5l2-5L7 15h5z"/></svg>
                </div>
                <h3>Skúsenosti</h3>
                <p>Dlhoročná prax v oblasti masáží, manuálnych techník a pohybovej regenerácie.</p>
            </div>
            <div class="value-card anim-reveal" data-delay="1">
                <div class="value-card__icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <h3>Individuálny prístup</h3>
                <p>Žiadne šablóny. Každá procedúra je prispôsobená presne vašim potrebám.</p>
            </div>
            <div class="value-card anim-reveal" data-delay="2">
                <div class="value-card__icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/></svg>
                </div>
                <h3>Moderné techniky</h3>
                <p>Využívame overené aj inovatívne postupy pre maximálny účinok.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section__head anim-reveal">
            <span class="label">Pre koho sme</span>
            <h2 class="h2">Pomôžeme vám, ak</h2>
        </div>
        <div class="target-grid">
            <div class="target-card anim-reveal">
                <div class="target-card__line"></div>
                <h3>Cítite napätie v oblasti chrbta alebo krku</h3>
                <p>Masáž je zameraná na uvoľnenie namáhaných oblastí a celkovú regeneráciu.</p>
            </div>
            <div class="target-card anim-reveal" data-delay="1">
                <div class="target-card__line"></div>
                <h3>Máte fyzicky náročnú prácu alebo ste športovec</h3>
                <p>Špeciálne regeneračné techniky pre rýchlejšie zotavenie a lepší výkon.</p>
            </div>
            <div class="target-card anim-reveal" data-delay="2">
                <div class="target-card__line"></div>
                <h3>Chcete sa jednoducho zrelaxovať</h3>
                <p>Relaxačná masáž kombinovaná s bankovaním pre dokonalé uvoľnenie tela aj mysle.</p>
            </div>
        </div>
    </div>
</section>

@endsection
