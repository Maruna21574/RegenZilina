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
                <p>Tieto obchodné podmienky upravujú vzťah medzi REGEN ŽILINA a zákazníkmi. Používaním našej webovej stránky a rezervačného systému súhlasíte s týmito podmienkami.</p>
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
            <p>Všetky služby sú poskytované kvalifikovanými terapeutmi v profesionálnom prostredí.</p>

            <h2>2. Rezervačný systém</h2>
            <p><strong>Online rezervácia:</strong> Rezervácie je možné vytvoriť prostredníctvom našej webovej stránky.</p>
            <p><strong>Potvrdenie:</strong> Rezervácia sa považuje za potvrdené po prijatí potvrdenia emailom.</p>
            <p><strong>Zmena rezervácie:</strong> Zmeny je možné vykonať najneskôr 24 hodín pred stanoveným časom. Prosím, kontaktujte nás na info@regenzilina.sk alebo +421 910 900 664.</p>

            <h2>3. Zrušenie a storno podmienky</h2>
            <p><strong>Zrušenie zákazníkom:</strong></p>
            <ul>
                <li><strong>Viac ako 24 hodín dopredu:</strong> Bezplatné zrušenie bez penálne</li>
                <li><strong>Menej ako 24 hodín dopredu:</strong> Poplatek za storno vo výške 50% z ceny služby</li>
                <li><strong>Bez upozornenia (no-show):</strong> Poplatek za storno vo výške 100% z ceny služby</li>
            </ul>
            <p><strong>Zrušenie REGEN ŽILINA:</strong> Máme právo zrušiť rezerváciu s rozumným varovaním (minimum 48 hodín) v prípade neplánovaných okolností alebo choroby terapeuta.</p>

            <h2>4. Spôsob platby</h2>
            <ul>
                <li><strong>Platba pri príchode:</strong> Hotovosť alebo platobná karta v clinic</li>
                <li><strong>Online platba:</strong> Pri online platbe je požadovaná úhrada minimálne 2 hodiny pred rezerváciou (v budúcnosti)</li>
            </ul>
            <p>Rabatné kódy a zľavy nesmú byť kombinované s inými ponukami (ak nie je uvedené inak).</p>

            <h2>5. Práva a povinnosti zákazníka</h2>
            <p><strong>Zákazník sa zaväzuje:</strong></p>
            <ul>
                <li>Dostaviť sa na čas alebo aspoň 5 minút pred začatím služby</li>
                <li>Poskytnúť správne a úplné informácie o svojom zdravotnom stave</li>
                <li>Dodržiavať príkazy a odporúčania terapeuta</li>
                <li>Chovať sa slušne a rešpektovať prostoredí a personál</li>
                <li>Dodržiavať našu politiku zrušenia a storna</li>
            </ul>
            <p><strong>Zákazník má právo:</strong></p>
            <ul>
                <li>Očakávať profesionálne a bezpečné poskytovanie služieb</li>
                <li>Požiadať o prebrzdenie procedúry v ktoromkoľvek čase</li>
                <li>Priať si si si dodatočnú konzultáciu alebo individualizáciu služby</li>
            </ul>

            <h2>6. Kontraindikácie a zdravotné opatrenia</h2>
            <p>Určité zdravotné stavy môžu predstavovať kontraindikáciu pre naše služby. Pred rezerváciou musíte:</p>
            <ul>
                <li>Informovať nás o okolnostiach dôležitých pre bezpečné poskytnutie služby</li>
                <li>Konzultovať s vašim lekárom, ak ste si nie ste istí, či je daná služba pre vás vhodná</li>
                <li>Informovať nás o akýchkoľvek alergických reakciách na esenciálne oleje alebo iné ingrediencie</li>
            </ul>
            <p>REGEN ŽILINA si vyhrazuje právo odmietnuť poskytnutie služby, ak máme dôvod domnievať sa, že by to mohlo poškodiť vaše zdravie.</p>

            <h2>7. Zodpovednosť a záručné</h2>
            <p><strong>REGEN ŽILINA nie je medicínska klinika.</strong> Naše služby sú určené na relaxáciu, regeneráciu a podporu pohody. Nenahrádzajú služby poskytované lekárom alebo iným zdravotníckym pracovníkom.</p>
            <p>Nezodpovedáme za:</p>
            <ul>
                <li>Žiadne nežiaduce účinky alebo skúsenosti počas alebo po procedúre, ak ste neposkytli úplné a presné informácie o svojom zdravotnom stave</li>
                <li>Straty alebo poškodenie osobných vecí, ktoré si prinesiete do našej kliniky</li>
                <li>Skúsenosti z tretích strán alebo odporučenia tretích strán</li>
            </ul>

            <h2>8. Zákaz diskriminovania</h2>
            <p>REGEN ŽILINA odmietame všetky formy diskriminácie. Naše služby sú dostupné pre všetkých bez ohľadu na rasu, farbu, pohlavie, vierou, sexuálnu orientáciu, genderovú identitu, národnosť alebo iný chránený status.</p>

            <h2>9. Politika bez ztráty</h2>
            <p>Všetci zákazníci sú s nami vítaní a spolu svoju podporu budeme pestovať. Ak máte negatívnu skúsenosť, prosím, dajte nám vedieť a my sa pokúsime to vyriešiť.</p>

            <h2>10. Porušenie podmienok</h2>
            <p>V prípade porušenia týchto obchodných podmienok si vyhrazujeme právo:</p>
            <ul>
                <li>Odmietnuť budúce rezervácie bez zdôvodnenia</li>
                <li>Zrušiť rezerváciu bez vrátenia peňazí</li>
                <li>Podať sťažnosť na príslušné orgány v prípadoch vážneho porušenia</li>
            </ul>

            <h2>11. Autorské práva a duševné vlastníctvo</h2>
            <p>Všetok obsah na našej webovej stránke — vrátane textov, obrázkov, videí a logotu — je chránený autorskými právami a duševným vlastnictvom REGEN ŽILINA. Nepovoľuje sa reprodukovať, distribúovať alebo modifikovať bez písomného súhlasu.</p>

            <h2>12. Zmeny obchodných podmienok</h2>
            <p>Vyhrazujeme si právo zmeniť tieto obchodné podmienky kedykoľvek. Zmeny budú zverejnené na tejto stránke. Pokračovaním v používaní našich služieb po zverejnení zmien súhlasíte s upravenými podmienkami.</p>

            <h2>13. Právna jurisdikcia</h2>
            <p>Tieto obchodné podmienky sú upravené právom Slovenskej republiky. Všetky spory sa budú riešiť v súlade so slovenským právom a v príslušných súdoch.</p>

            <h2>14. Kontakt</h2>
            <p>V prípade akýchkoľvek otázok týkajúcich sa obchodných podmienok, kontaktujte nás:</p>
            <p><strong>Email:</strong> info@regenzilina.sk<br>
            <strong>Telefón:</strong> +421 910 900 664<br>
            <strong>Adresa:</strong> J. M. Hurbana 4, Žilina 010 01, Slovensko</p>
        </div>
    </div>
</section>

@endsection
