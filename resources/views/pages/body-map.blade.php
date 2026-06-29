@extends('layouts.app')
@section('title', 'Čo vás bolí? — Nájdite správnu masáž | REGEN ŽILINA')
@section('meta_description', 'Bolí vás chrbát, krk, ramená alebo kolená? Kliknite na problémovú oblasť a my vám odporučíme najvhodnejšiu masáž alebo terapiu v REGEN ŽILINA.')
@section('meta_keywords', 'bolesti chrbta Žilina, bolesť krku masáž, bolesť ramena terapia, bolesť kolena, masáž na bolesti, ktorá masáž je pre mňa')

@section('content')

<section class="page-hero page-hero--short">
    <div class="container">
        <span class="label label--light anim-fade">Interaktívny sprievodca</span>
        <h1 class="page-hero__title anim-fade" data-delay="1">Ukážte nám,<br><span>čo vás bolí</span></h1>
        <p class="page-hero__sub anim-fade" data-delay="2">Kliknite na oblasť tela a my vám odporučíme ideálnu procedúru.</p>
    </div>
</section>

<section class="bodymap-section">
    <div class="bodymap-full">
        <div class="bodymap">
            <div class="bodymap__figure anim-reveal">
                <div class="bodymap__glow"></div>
                <svg class="bodymap__svg" viewBox="0 0 400 900" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="bodyGrad" x1="200" y1="0" x2="200" y2="900" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#d4e4da"/>
                            <stop offset="50%" stop-color="#c2d6c9"/>
                            <stop offset="100%" stop-color="#d4e4da"/>
                        </linearGradient>
                        <filter id="bodyShadow">
                            <feDropShadow dx="0" dy="4" stdDeviation="12" flood-color="#173124" flood-opacity="0.12"/>
                        </filter>
                        <filter id="dotGlow">
                            <feGaussianBlur stdDeviation="3" result="blur"/>
                            <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                        </filter>
                    </defs>

                    {{-- Hlavná silueta --}}
                    <path class="bodymap__silhouette" filter="url(#bodyShadow)" d="
                        M200 40 C222 40 240 58 242 80 C244 102 236 118 228 128 C224 133 218 138 218 138
                        L222 142 C226 144 234 148 244 156 L268 172 L298 198 L322 232
                        C330 244 336 258 332 268 C328 276 320 278 314 274 L290 252
                        L268 228 L254 218 L250 226 L248 280 L252 320 L256 360
                        L260 400 L266 450 L270 500 L272 550 L270 600 L268 650
                        C266 670 264 690 260 710 L256 740 C254 752 250 762 244 768
                        C240 772 234 774 228 772 L224 770 C220 768 218 762 218 756
                        L220 730 L222 700 L224 660 L224 620 L222 580 L218 540
                        L214 500 L210 460 L206 430 L200 410
                        L194 430 L190 460 L186 500 L182 540 L178 580 L176 620
                        L176 660 L178 700 L180 730 L182 756 C182 762 180 768 176 770
                        L172 772 C166 774 160 772 156 768 C150 762 146 752 144 740
                        L140 710 C136 690 134 670 132 650 L130 600 L128 550
                        L130 500 L134 450 L140 400 L144 360 L148 320 L152 280
                        L150 226 L146 218 L132 228 L110 252 L86 274 C80 278 72 276 68 268
                        C64 258 70 244 78 232 L102 198 L132 172 L156 156
                        C166 148 174 144 178 142 L182 138 C182 138 176 133 172 128
                        C164 118 156 102 158 80 C160 58 178 40 200 40 Z
                    "/>

                    {{-- Chrbtica --}}
                    <line class="bodymap__spine-line" x1="200" y1="145" x2="200" y2="400" stroke="#173124" stroke-width="2" stroke-dasharray="3 5" stroke-linecap="round" opacity="0.2"/>

                    {{-- Spojovacie čiary od bodov k popisu --}}
                    <g class="bodymap__connectors" opacity="0.2">
                        <line x1="200" y1="85" x2="280" y2="85" stroke="#173124" stroke-width="1" stroke-dasharray="3 3"/>
                        <line x1="200" y1="148" x2="280" y2="148" stroke="#173124" stroke-width="1" stroke-dasharray="3 3"/>
                        <line x1="264" y1="215" x2="290" y2="215" stroke="#173124" stroke-width="1" stroke-dasharray="3 3"/>
                        <line x1="136" y1="215" x2="110" y2="215" stroke="#173124" stroke-width="1" stroke-dasharray="3 3"/>
                        <line x1="200" y1="260" x2="280" y2="260" stroke="#173124" stroke-width="1" stroke-dasharray="3 3"/>
                        <line x1="200" y1="370" x2="280" y2="370" stroke="#173124" stroke-width="1" stroke-dasharray="3 3"/>
                        <line x1="235" y1="445" x2="290" y2="445" stroke="#173124" stroke-width="1" stroke-dasharray="3 3"/>
                        <line x1="165" y1="445" x2="110" y2="445" stroke="#173124" stroke-width="1" stroke-dasharray="3 3"/>
                        <line x1="230" y1="620" x2="290" y2="620" stroke="#173124" stroke-width="1" stroke-dasharray="3 3"/>
                        <line x1="170" y1="620" x2="110" y2="620" stroke="#173124" stroke-width="1" stroke-dasharray="3 3"/>
                    </g>

                    {{-- Labely pri čiarach --}}
                    <g class="bodymap__svg-labels">
                        <text x="288" y="89" class="bodymap__svg-label" data-zone="hlava">Hlava</text>
                        <text x="288" y="148" class="bodymap__svg-label" data-zone="krk">Krčná</text>
                        <text x="288" y="164" class="bodymap__svg-label" data-zone="krk">chrbtica</text>
                        <text x="298" y="219" class="bodymap__svg-label" data-zone="rameno-l">Rameno</text>
                        <text x="102" y="219" class="bodymap__svg-label bodymap__svg-label--left" data-zone="rameno-r">Rameno</text>
                        <text x="288" y="260" class="bodymap__svg-label" data-zone="hrudna-chrbtica">Hrudná</text>
                        <text x="288" y="276" class="bodymap__svg-label" data-zone="hrudna-chrbtica">chrbtica</text>
                        <text x="288" y="374" class="bodymap__svg-label" data-zone="bedra">Drieková</text>
                        <text x="288" y="390" class="bodymap__svg-label" data-zone="bedra">oblasť</text>
                        <text x="298" y="449" class="bodymap__svg-label" data-zone="bedro-l">Bedrový kĺb</text>
                        <text x="102" y="449" class="bodymap__svg-label bodymap__svg-label--left" data-zone="bedro-r">Bedrový kĺb</text>
                        <text x="298" y="624" class="bodymap__svg-label" data-zone="koleno-l">Koleno</text>
                        <text x="102" y="624" class="bodymap__svg-label bodymap__svg-label--left" data-zone="koleno-r">Koleno</text>
                    </g>

                    {{-- Interaktívne body --}}
                    <g class="bodymap__point" data-zone="hlava" filter="url(#dotGlow)">
                        <circle cx="200" cy="85" r="22" class="bodymap__hit"/>
                        <circle cx="200" cy="85" r="10" class="bodymap__ring"/>
                        <circle cx="200" cy="85" r="5" class="bodymap__dot"/>
                        <circle cx="200" cy="85" r="10" class="bodymap__pulse"/>
                    </g>
                    <g class="bodymap__point" data-zone="krk" filter="url(#dotGlow)">
                        <circle cx="200" cy="148" r="18" class="bodymap__hit"/>
                        <circle cx="200" cy="148" r="9" class="bodymap__ring"/>
                        <circle cx="200" cy="148" r="4.5" class="bodymap__dot"/>
                        <circle cx="200" cy="148" r="9" class="bodymap__pulse"/>
                    </g>
                    <g class="bodymap__point" data-zone="rameno-l" filter="url(#dotGlow)">
                        <circle cx="264" cy="215" r="20" class="bodymap__hit"/>
                        <circle cx="264" cy="215" r="9" class="bodymap__ring"/>
                        <circle cx="264" cy="215" r="4.5" class="bodymap__dot"/>
                        <circle cx="264" cy="215" r="9" class="bodymap__pulse"/>
                    </g>
                    <g class="bodymap__point" data-zone="rameno-r" filter="url(#dotGlow)">
                        <circle cx="136" cy="215" r="20" class="bodymap__hit"/>
                        <circle cx="136" cy="215" r="9" class="bodymap__ring"/>
                        <circle cx="136" cy="215" r="4.5" class="bodymap__dot"/>
                        <circle cx="136" cy="215" r="9" class="bodymap__pulse"/>
                    </g>
                    <g class="bodymap__point" data-zone="hrudna-chrbtica" filter="url(#dotGlow)">
                        <circle cx="200" cy="260" r="20" class="bodymap__hit"/>
                        <circle cx="200" cy="260" r="10" class="bodymap__ring"/>
                        <circle cx="200" cy="260" r="5" class="bodymap__dot"/>
                        <circle cx="200" cy="260" r="10" class="bodymap__pulse"/>
                    </g>
                    <g class="bodymap__point" data-zone="bedra" filter="url(#dotGlow)">
                        <circle cx="200" cy="370" r="22" class="bodymap__hit"/>
                        <circle cx="200" cy="370" r="11" class="bodymap__ring"/>
                        <circle cx="200" cy="370" r="5.5" class="bodymap__dot"/>
                        <circle cx="200" cy="370" r="11" class="bodymap__pulse"/>
                    </g>
                    <g class="bodymap__point" data-zone="bedro-l" filter="url(#dotGlow)">
                        <circle cx="235" cy="445" r="20" class="bodymap__hit"/>
                        <circle cx="235" cy="445" r="9" class="bodymap__ring"/>
                        <circle cx="235" cy="445" r="4.5" class="bodymap__dot"/>
                        <circle cx="235" cy="445" r="9" class="bodymap__pulse"/>
                    </g>
                    <g class="bodymap__point" data-zone="bedro-r" filter="url(#dotGlow)">
                        <circle cx="165" cy="445" r="20" class="bodymap__hit"/>
                        <circle cx="165" cy="445" r="9" class="bodymap__ring"/>
                        <circle cx="165" cy="445" r="4.5" class="bodymap__dot"/>
                        <circle cx="165" cy="445" r="9" class="bodymap__pulse"/>
                    </g>
                    <g class="bodymap__point" data-zone="koleno-l" filter="url(#dotGlow)">
                        <circle cx="230" cy="620" r="18" class="bodymap__hit"/>
                        <circle cx="230" cy="620" r="9" class="bodymap__ring"/>
                        <circle cx="230" cy="620" r="4.5" class="bodymap__dot"/>
                        <circle cx="230" cy="620" r="9" class="bodymap__pulse"/>
                    </g>
                    <g class="bodymap__point" data-zone="koleno-r" filter="url(#dotGlow)">
                        <circle cx="170" cy="620" r="18" class="bodymap__hit"/>
                        <circle cx="170" cy="620" r="9" class="bodymap__ring"/>
                        <circle cx="170" cy="620" r="4.5" class="bodymap__dot"/>
                        <circle cx="170" cy="620" r="9" class="bodymap__pulse"/>
                    </g>
                    <g class="bodymap__point" data-zone="clenok-l" filter="url(#dotGlow)">
                        <circle cx="244" cy="755" r="16" class="bodymap__hit"/>
                        <circle cx="244" cy="755" r="8" class="bodymap__ring"/>
                        <circle cx="244" cy="755" r="4" class="bodymap__dot"/>
                        <circle cx="244" cy="755" r="8" class="bodymap__pulse"/>
                    </g>
                    <g class="bodymap__point" data-zone="clenok-r" filter="url(#dotGlow)">
                        <circle cx="156" cy="755" r="16" class="bodymap__hit"/>
                        <circle cx="156" cy="755" r="8" class="bodymap__ring"/>
                        <circle cx="156" cy="755" r="4" class="bodymap__dot"/>
                        <circle cx="156" cy="755" r="8" class="bodymap__pulse"/>
                    </g>
                </svg>
            </div>

            <div class="bodymap__panel" id="bodymapPanel">
                <div class="bodymap__panel-default" id="panelDefault">
                    <div class="bodymap__panel-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <h3>Vyberte oblasť</h3>
                    <p>Kliknite na bod na tele, ktorý vás trápi. Odporučíme vám najvhodnejšiu procedúru.</p>
                </div>

                <div class="bodymap__panel-content" id="panelContent" style="display:none;">
                    <button class="bodymap__panel-close" id="panelClose">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                    </button>
                    <div class="bodymap__panel-zone" id="panelZone"></div>
                    <h3 id="panelTitle"></h3>
                    <p id="panelDesc"></p>
                    <div class="bodymap__panel-problems">
                        <h4>Časté problémy</h4>
                        <ul id="panelProblems"></ul>
                    </div>
                    <div class="bodymap__panel-recommend">
                        <h4>Odporúčame</h4>
                        <div id="panelServices"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="cta__inner anim-reveal">
            <h2 class="cta__title">Neviete si vybrať?</h2>
            <p class="cta__text">Kontaktujte nás a poradíme vám najvhodnejšiu procedúru.</p>
            <a href="{{ route('contact') }}" class="btn btn--primary btn--lg">
                <span>Kontaktovať nás</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const zones = {
        'hlava': {
            title: 'Hlava a spánky',
            desc: 'Bolesti hlavy, migrény a tenzné bolesti často súvisia s napätím v krčnej chrbtici a trapézových svaloch.',
            problems: ['Migrény a tenzné bolesti hlavy', 'Závraty z krčnej chrbtice', 'Napätie v spánkoch a čeľusti', 'Bolesti za očami'],
            services: [
                { name: 'REGEN THERAPY', id: 3, why: 'Cielená práca na krčnej chrbtici a suboccipitálnych svaloch' },
                { name: 'KINEZIOTEJPING', id: 4, why: 'Podpora svalov krku po terapii' }
            ]
        },
        'krk': {
            title: 'Krčná chrbtica',
            desc: 'Najčastejšie problémová oblasť — sedavý spôsob života, práca za počítačom a nesprávne držanie tela spôsobujú chronické napätie.',
            problems: ['Stuhnutý krk a obmedzená rotácia', 'Bolesti vyžarujúce do ramien', 'Blokády krčných stavcov', 'Parestézie (tŕpnutie) v rukách'],
            services: [
                { name: 'REGEN THERAPY', id: 3, why: 'Mobilizácia stavcov, MFR, mäkké techniky na hlboké svaly krku' },
                { name: 'REGEN RELAX', id: 1, why: 'Uvoľnenie celkového napätia s baňkovaním na šiju' }
            ]
        },
        'rameno-l': {
            title: 'Ramenný kĺb',
            desc: 'Ramenný kĺb je najpohyblivejší kĺb tela — a preto aj najzraniteľnejší. Problémy často vznikajú z preťaženia alebo svalovej dysbalancie.',
            problems: ['Zamrznuté rameno (frozen shoulder)', 'Bolesti pri zdvíhaní ruky', 'Preťaženie z tréningu alebo práce', 'Syndróm rotátorovej manžety'],
            services: [
                { name: 'REGEN THERAPY', id: 3, why: 'Mobilizácia kĺbu, PIR technika, uvoľnenie rotátorov' },
                { name: 'REGEN SPORT', id: 2, why: 'Regenerácia po športovom preťažení ramena' },
                { name: 'KINEZIOTEJPING', id: 4, why: 'Stabilizácia a podpora kĺbu medzi návštevami' }
            ]
        },
        'rameno-r': {
            title: 'Ramenný kĺb',
            desc: 'Ramenný kĺb je najpohyblivejší kĺb tela — a preto aj najzraniteľnejší. Problémy často vznikajú z preťaženia alebo svalovej dysbalancie.',
            problems: ['Zamrznuté rameno (frozen shoulder)', 'Bolesti pri zdvíhaní ruky', 'Preťaženie z tréningu alebo práce', 'Syndróm rotátorovej manžety'],
            services: [
                { name: 'REGEN THERAPY', id: 3, why: 'Mobilizácia kĺbu, PIR technika, uvoľnenie rotátorov' },
                { name: 'REGEN SPORT', id: 2, why: 'Regenerácia po športovom preťažení ramena' },
                { name: 'KINEZIOTEJPING', id: 4, why: 'Stabilizácia a podpora kĺbu medzi návštevami' }
            ]
        },
        'hrudna-chrbtica': {
            title: 'Hrudná chrbtica',
            desc: 'Stuhnutá hrudná chrbtica ovplyvňuje dýchanie, držanie tela a môže spôsobovať bolesti medzi lopatkami.',
            problems: ['Bolesti medzi lopatkami', 'Stuhnutosť a pocit tlaku na hrudníku', 'Rebrové blokády', 'Zhoršené držanie tela (kyfóza)'],
            services: [
                { name: 'REGEN THERAPY', id: 3, why: 'Mobilizácia hrudnej chrbtice a rebier, MFR medzilopatkových svalov' },
                { name: 'REGEN RELAX', id: 1, why: 'Celkové uvoľnenie chrbta s baňkovaním na hornú časť' }
            ]
        },
        'bedra': {
            title: 'Drieková oblasť (bedra)',
            desc: 'Najčastejšia oblasť bolesti chrbta. Drieková chrbtica nesie najväčšiu záťaž a je citlivá na sedavý životný štýl aj fyzickú námahu.',
            problems: ['Akútne „zaseknutie" (lumbago)', 'Chronické bolesti dolného chrbta', 'Vyžarovanie do nôh (ischias)', 'Stuhnuté bedrové svaly (psoas, quadratus)'],
            services: [
                { name: 'REGEN THERAPY', id: 3, why: 'Hĺbková práca na bedrovej chrbtici, uvoľnenie psoas, mobilizácia' },
                { name: 'REGEN SPORT', id: 2, why: 'Pre športovcov s preťaženým dolným chrbtom' },
                { name: 'KINEZIOTEJPING', id: 4, why: 'Podpora driekovej oblasti na 3–5 dní po terapii' }
            ]
        },
        'bedro-l': {
            title: 'Bedrový kĺb',
            desc: 'Bedrový kĺb ovplyvňuje chôdzu, stabilitu a celkový pohyb. Problémy sa často prenášajú do dolného chrbta alebo kolien.',
            problems: ['Obmedzený rozsah pohybu', 'Bolesti v slabine a stehne', 'Preskakujúce bedro (snapping hip)', 'Preťaženie po behu alebo cyklistike'],
            services: [
                { name: 'REGEN THERAPY', id: 3, why: 'Mobilizácia bedrového kĺbu, uvoľnenie flexorov a rotátorov' },
                { name: 'REGEN SPORT', id: 2, why: 'Regenerácia a prevencia pre bežcov a cyklistov' }
            ]
        },
        'bedro-r': {
            title: 'Bedrový kĺb',
            desc: 'Bedrový kĺb ovplyvňuje chôdzu, stabilitu a celkový pohyb. Problémy sa často prenášajú do dolného chrbta alebo kolien.',
            problems: ['Obmedzený rozsah pohybu', 'Bolesti v slabine a stehne', 'Preskakujúce bedro (snapping hip)', 'Preťaženie po behu alebo cyklistike'],
            services: [
                { name: 'REGEN THERAPY', id: 3, why: 'Mobilizácia bedrového kĺbu, uvoľnenie flexorov a rotátorov' },
                { name: 'REGEN SPORT', id: 2, why: 'Regenerácia a prevencia pre bežcov a cyklistov' }
            ]
        },
        'koleno-l': {
            title: 'Koleno',
            desc: 'Kolenný kĺb je zložitý a veľmi zaťažovaný. Problémy často vznikajú z dysbalancie svalov stehna alebo preťaženia.',
            problems: ['Bolesti pri chôdzi do schodov', 'Nestabilné koleno', 'Runner\'s knee (bežecké koleno)', 'Preťaženie po športe'],
            services: [
                { name: 'REGEN SPORT', id: 2, why: 'Práca na svaloch stehna, uvoľnenie ITB a quadricepsu' },
                { name: 'KINEZIOTEJPING', id: 4, why: 'Stabilizácia a odľahčenie kolenného kĺbu' }
            ]
        },
        'koleno-r': {
            title: 'Koleno',
            desc: 'Kolenný kĺb je zložitý a veľmi zaťažovaný. Problémy často vznikajú z dysbalancie svalov stehna alebo preťaženia.',
            problems: ['Bolesti pri chôdzi do schodov', 'Nestabilné koleno', 'Runner\'s knee (bežecké koleno)', 'Preťaženie po športe'],
            services: [
                { name: 'REGEN SPORT', id: 2, why: 'Práca na svaloch stehna, uvoľnenie ITB a quadricepsu' },
                { name: 'KINEZIOTEJPING', id: 4, why: 'Stabilizácia a odľahčenie kolenného kĺbu' }
            ]
        },
        'clenok-l': {
            title: 'Členok a noha',
            desc: 'Členky nesú celú váhu tela a sú náchylné na vyvrtnutia a preťaženie, najmä u športovcov.',
            problems: ['Opakované vyvrtnutia', 'Bolesti Achillovej šľachy', 'Plantárna fasciitída (bolesť päty)', 'Preťaženie z behu alebo stania'],
            services: [
                { name: 'REGEN SPORT', id: 2, why: 'Regenerácia po záťaži, práca na lýtku a plantárnej fascii' },
                { name: 'KINEZIOTEJPING', id: 4, why: 'Podpora členku a Achillovej šľachy' }
            ]
        },
        'clenok-r': {
            title: 'Členok a noha',
            desc: 'Členky nesú celú váhu tela a sú náchylné na vyvrtnutia a preťaženie, najmä u športovcov.',
            problems: ['Opakované vyvrtnutia', 'Bolesti Achillovej šľachy', 'Plantárna fasciitída (bolesť päty)', 'Preťaženie z behu alebo stania'],
            services: [
                { name: 'REGEN SPORT', id: 2, why: 'Regenerácia po záťaži, práca na lýtku a plantárnej fascii' },
                { name: 'KINEZIOTEJPING', id: 4, why: 'Podpora členku a Achillovej šľachy' }
            ]
        }
    };

    const panelDefault = document.getElementById('panelDefault');
    const panelContent = document.getElementById('panelContent');
    const panelClose = document.getElementById('panelClose');

    document.querySelectorAll('.bodymap__point').forEach(point => {
        point.addEventListener('click', () => {
            const zone = point.dataset.zone;
            const data = zones[zone];
            if (!data) return;

            document.querySelectorAll('.bodymap__point').forEach(p => p.classList.remove('bodymap__point--active'));
            document.querySelectorAll('.bodymap__svg-label').forEach(l => l.classList.remove('bodymap__svg-label--active'));
            point.classList.add('bodymap__point--active');
            document.querySelectorAll(`.bodymap__svg-label[data-zone="${zone}"]`).forEach(l => l.classList.add('bodymap__svg-label--active'));

            document.getElementById('panelZone').textContent = data.title;
            document.getElementById('panelTitle').textContent = data.title;
            document.getElementById('panelDesc').textContent = data.desc;

            const ul = document.getElementById('panelProblems');
            ul.innerHTML = data.problems.map(p => `<li>${p}</li>`).join('');

            const svcDiv = document.getElementById('panelServices');
            svcDiv.innerHTML = data.services.map(s => `
                <div class="bodymap__svc-card">
                    <strong>${s.name}</strong>
                    <p>${s.why}</p>
                    <a href="/rezervacia?service=${s.id}" class="btn btn--primary btn--sm">
                        <span>Rezervovať</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            `).join('');

            panelDefault.style.display = 'none';
            panelContent.style.display = 'block';
            panelContent.classList.add('bodymap__panel-content--enter');
            setTimeout(() => panelContent.classList.remove('bodymap__panel-content--enter'), 400);
        });
    });

    document.querySelectorAll('.bodymap__svg-label').forEach(label => {
        label.addEventListener('click', () => {
            const zone = label.dataset.zone;
            const point = document.querySelector(`.bodymap__point[data-zone="${zone}"]`);
            if (point) point.dispatchEvent(new Event('click'));
        });
    });

    panelClose?.addEventListener('click', () => {
        panelContent.style.display = 'none';
        panelDefault.style.display = 'flex';
        document.querySelectorAll('.bodymap__point').forEach(p => p.classList.remove('bodymap__point--active'));
        document.querySelectorAll('.bodymap__svg-label').forEach(l => l.classList.remove('bodymap__svg-label--active'));
    });
});
</script>

@endsection
