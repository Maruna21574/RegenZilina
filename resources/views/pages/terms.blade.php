@extends('layouts.app')

@section('title', 'Obchodné podmienky — REGEN ŽILINA')
@section('meta_description', 'Obchodné podmienky REGEN ŽILINA — pravidlá používania webovej stránky a rezervovania služieb.')
@section('meta_keywords', 'obchodné podmienky, podmienky služieb, pravidlá rezervácie, podmienky')

@section('content')

<section class="page-hero page-hero--short" style="background-image: url('{{ asset("img/pexels-koolshooters-6628615.webp") }}')">
    <div class="container">
        <span class="label label--light anim-fade">Právne informácie</span>
        <h1 class="page-hero__title anim-fade" data-delay="1">Obchodné<br><span>podmienky</span></h1>
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
                <p>Tieto obchodné podmienky upravujú vzťah medzi REGEN ŽILINA a jej zákazníkmi. Používaním našej webovej stránky a rezervačného systému s nimi súhlasíte.</p>
            </div>

            <h2>1. Popis služieb</h2>
            <p>REGEN ŽILINA ponúka nasledujúce služby:</p>
            <ul>
                <li>Relaxačné a športové masáže</li>
                <li>Manuálne masážne techniky a pohybovú regeneráciu</li>
                <li>Bankovanie a kineziotejping</li>
                <li>Maderoterapiu (masáž drevením)</li>
                <li>Ďalšie špecializované procedúry podľa individuálnej konzultácie</li>
            </ul>
            <p>Všetky služby poskytujú kvalifikovaní terapeuti v profesionálnom prostredí.</p>

            <h2>2. Rezervačný systém</h2>
            <p><strong>Online rezervácia:</strong> Rezerváciu si môžete vytvoriť priamo cez našu webovú stránku.</p>
            <p><strong>Potvrdenie:</strong> Rezervácia je potvrdená vo chvíli, keď vám príde potvrdzujúci e-mail.</p>
            <p><strong>Zmena rezervácie:</strong> Zmenu termínu je možné vykonať najneskôr 24 hodín vopred. Napíšte nám na info@regenzilina.sk alebo zavolajte na +421 910 900 664.</p>

            <h2>3. Zrušenie a storno podmienky</h2>
            <p><strong>Zrušenie zo strany zákazníka:</strong></p>
            <ul>
                <li><strong>Viac ako 24 hodín vopred:</strong> zrušenie je bezplatné, bez akéhokoľvek poplatku</li>
                <li><strong>Menej ako 24 hodín vopred:</strong> účtujeme storno poplatok vo výške 50 % z ceny služby</li>
                <li><strong>Bez ospravedlnenia (no-show):</strong> účtujeme storno poplatok vo výške 100 % z ceny služby</li>
            </ul>
            <p><strong>Zrušenie zo strany REGEN ŽILINA:</strong> Vyhradzujeme si právo zrušiť rezerváciu s primeraným predstihom (minimálne 48 hodín), napríklad pri neočakávaných okolnostiach alebo chorobe terapeuta.</p>

            <h2>4. Spôsob platby</h2>
            <ul>
                <li><strong>Platba pri príchode:</strong> hotovosťou alebo platobnou kartou priamo u nás</li>
                <li><strong>Online platba:</strong> v budúcnosti bude možná aj úhrada online, a to najneskôr 2 hodiny pred termínom rezervácie</li>
            </ul>
            <p>Zľavové kódy a akcie nie je možné kombinovať s inými ponukami, pokiaľ nie je uvedené inak.</p>

            <h2>5. Práva a povinnosti zákazníka</h2>
            <p><strong>Zákazník sa zaväzuje:</strong></p>
            <ul>
                <li>Dostaviť sa na dohodnutý termín, v ideálnom prípade aspoň 5 minút vopred</li>
                <li>Poskytnúť správne a úplné informácie o svojom zdravotnom stave</li>
                <li>Riadiť sa pokynmi a odporúčaniami terapeuta</li>
                <li>Správať sa slušne a rešpektovať priestory aj personál</li>
                <li>Dodržiavať naše storno podmienky</li>
            </ul>
            <p><strong>Zákazník má právo:</strong></p>
            <ul>
                <li>Očakávať profesionálne a bezpečné poskytnutie služby</li>
                <li>Kedykoľvek požiadať o prerušenie procedúry</li>
                <li>Požiadať o doplňujúcu konzultáciu alebo prispôsobenie služby svojim potrebám</li>
            </ul>

            <h2>6. Kontraindikácie a zdravotné opatrenia</h2>
            <p>Niektoré zdravotné stavy môžu byť pre naše služby kontraindikáciou. Pred rezerváciou by ste preto mali:</p>
            <ul>
                <li>Informovať nás o všetkých okolnostiach dôležitých pre bezpečné poskytnutie služby</li>
                <li>V prípade pochybností konzultovať vhodnosť služby so svojím lekárom</li>
                <li>Upozorniť nás na prípadné alergické reakcie na esenciálne oleje alebo iné použité látky</li>
            </ul>
            <p>REGEN ŽILINA si vyhradzuje právo odmietnuť poskytnutie služby, ak máme dôvodné podozrenie, že by mohla poškodiť vaše zdravie.</p>

            <h2>7. Zodpovednosť a záruky</h2>
            <p><strong>REGEN ŽILINA nie je zdravotnícke zariadenie.</strong> Naše služby slúžia na relaxáciu, regeneráciu a podporu celkovej pohody a nenahrádzajú starostlivosť lekára ani iného zdravotníckeho pracovníka.</p>
            <p>Nezodpovedáme za:</p>
            <ul>
                <li>Nežiaduce účinky či nepríjemné pocity počas alebo po procedúre, ak ste nám vopred neposkytli úplné a presné informácie o svojom zdravotnom stave</li>
                <li>Stratu alebo poškodenie osobných vecí, ktoré si prinesiete do našich priestorov</li>
                <li>Skúsenosti alebo odporúčania tretích strán</li>
            </ul>

            <h2>8. Zákaz diskriminácie</h2>
            <p>REGEN ŽILINA odmieta akúkoľvek formu diskriminácie. Naše služby sú dostupné všetkým bez ohľadu na rasu, farbu pleti, pohlavie, vierovyznanie, sexuálnu orientáciu, rodovú identitu, národnosť či iný chránený status.</p>

            <h2>9. Spokojnosť zákazníkov</h2>
            <p>Každého zákazníka u nás radi privítame a záleží nám na príjemnej a otvorenej atmosfére. Ak by ste mali akúkoľvek negatívnu skúsenosť, dajte nám prosím vedieť — radi ju s vami vyriešime.</p>

            <h2>10. Porušenie podmienok</h2>
            <p>V prípade porušenia týchto obchodných podmienok si vyhradzujeme právo:</p>
            <ul>
                <li>Odmietnuť budúce rezervácie bez uvedenia dôvodu</li>
                <li>Zrušiť rezerváciu bez vrátenia peňazí</li>
                <li>V prípade závažného porušenia obrátiť sa na príslušné orgány</li>
            </ul>

            <h2>11. Autorské práva a duševné vlastníctvo</h2>
            <p>Všetok obsah na našej webovej stránke — vrátane textov, obrázkov, videí a loga — je chránený autorským právom a je duševným vlastníctvom REGEN ŽILINA. Bez nášho písomného súhlasu ho nie je dovolené kopírovať, šíriť ani upravovať.</p>

            <h2>12. Zmeny obchodných podmienok</h2>
            <p>Vyhradzujeme si právo tieto obchodné podmienky kedykoľvek zmeniť. Zmeny zverejníme na tejto stránke a ich používaním po zverejnení s nimi vyjadrujete súhlas.</p>

            <h2>13. Právna jurisdikcia</h2>
            <p>Tieto obchodné podmienky sa riadia právnym poriadkom Slovenskej republiky. Prípadné spory budú riešené v súlade so slovenským právom na príslušných súdoch.</p>

            <h2>14. Kontakt</h2>
            <p>V prípade akýchkoľvek otázok týkajúcich sa obchodných podmienok, kontaktujte nás:</p>
            <p><strong>Email:</strong> info@regenzilina.sk<br>
            <strong>Telefón:</strong> +421 910 900 664<br>
            <strong>Adresa:</strong> J. M. Hurbana 4, Žilina 010 01, Slovensko</p>
        </div>
    </div>
</section>

@endsection
