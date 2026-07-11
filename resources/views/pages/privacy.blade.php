@extends('layouts.app')

@section('title', 'Ochrana súkromia — REGEN ŽILINA')
@section('meta_description', 'Politika ochrany osobných údajov REGEN ŽILINA. Zistiť ako spracúvame vaše údaje v súlade s GDPR.')
@section('meta_keywords', 'ochrana súkromia, GDPR, osobné údaje, politika ochrany')

@section('content')

<section class="page-hero page-hero--short" style="background-image: url('{{ asset("img/pexels-koolshooters-6628615.webp") }}')">
    <div class="container">
        <span class="label label--light anim-fade">Právne informácie</span>
        <h1 class="page-hero__title anim-fade" data-delay="1">Ochrana<br><span>vášho súkromia</span></h1>
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
                <p>REGEN ŽILINA sa zaväzuje chrániť vaše osobné údaje v súlade s Nariadením Európskeho parlamentu a Rady (EÚ) 2016/679 (GDPR) a všetkými platnými zákonmi o ochrane údajov.</p>
            </div>

            <h2>1. Kto sme</h2>
            <p><strong>Prevádzkovateľ:</strong> REGEN ŽILINA<br>
            <strong>Adresa:</strong> J. M. Hurbana 4, Žilina 010 01, Slovensko<br>
            <strong>Email:</strong> info@regenzilina.sk<br>
            <strong>Telefón:</strong> +421 910 900 664</p>

            <h2>2. Aké údaje spracúvame</h2>
            <p>V priebehu poskytovania našich služieb spracúvame nasledujúce kategórie osobných údajov:</p>
            <ul>
                <li><strong>Kontaktné údaje:</strong> Meno, priezvisko, emailová adresa, telefónne číslo</li>
                <li><strong>Údaje o rezervácii:</strong> Dátum a čas rezervácie, vybraná služba, poznámky ku rezervácii</li>
                <li><strong>Údaje o platbách:</strong> História transakcií a použitých zľavových kódov</li>
                <li><strong>Technické údaje:</strong> IP adresa, typ prehliadača, stránky navštívené, čas návštevy</li>
                <li><strong>Údaje z kontaktného formulára:</strong> Meno, email a obsah správy</li>
            </ul>

            <h2>3. Právny základ spracúvania</h2>
            <p>Spracúvame vaše údaje na základe:</p>
            <ul>
                <li><strong>Plnenie zmluvy:</strong> Spracúvanie údajov potrebných na vytvorenie a splnenie rezervácie</li>
                <li><strong>Váš súhlas:</strong> Spracúvanie údajov na marketingové účely, newsletter a ponuky</li>
                <li><strong>Právna povinnosť:</strong> Spracúvanie údajov v súlade s daňovými a účetnictvím zákonmi</li>
                <li><strong>Oprávnený záujem:</strong> Zlepšovanie našich služieb a prevencia podvodov</li>
            </ul>

            <h2>4. S kým zdieľame vaše údaje</h2>
            <p>Vaše osobné údaje môžeme zdieľať s:</p>
            <ul>
                <li><strong>Poskytovatelia služieb:</strong> Poskytovatelia emailovej komunikácie, webhostingu a analýzy</li>
                <li><strong>Právne požiadavky:</strong> Orgány verejnej moci v prípade právnej požiadavky</li>
                <li><strong>Nový vlastník:</strong> V prípade spoločnosti, fuzácie alebo prevodu podnikania</li>
            </ul>
            <p>Nikdy nepredávame vaše údaje tretím stranám bez vášho výslovného súhlasu.</p>

            <h2>5. Ako dlho uchováme vaše údaje</h2>
            <ul>
                <li><strong>Údaje o rezervácii:</strong> 5 rokov (z dôvodu účetnictvej povinnosti)</li>
                <li><strong>Údaje z kontaktného formulára:</strong> 2 roky</li>
                <li><strong>Marketingové údaje:</strong> Až pokiaľ vznesie námietku alebo zruší svoj súhlas</li>
                <li><strong>Cookies:</strong> Podľa typu cookies (viď Politika cookies)</li>
            </ul>

            <h2>6. Vaše práva</h2>
            <p>Máte nasledujúce práva týkajúce sa vašich osobných údajov:</p>
            <ul>
                <li><strong>Právo na prístup:</strong> Môžete požiadať o kópiu vašich spracúvaných údajov</li>
                <li><strong>Právo na opravu:</strong> Môžete požiadať o opravu nepresných údajov</li>
                <li><strong>Právo na vymazanie:</strong> Môžete požiadať o vymazanie vašich údajov (v určitých prípadoch)</li>
                <li><strong>Právo na obmedzenie:</strong> Môžete požiadať na obmedzenie spracúvania</li>
                <li><strong>Právo na prenositeľnosť:</strong> Môžete si vyžiadať svoje údaje v štruktúrovanom formáte</li>
                <li><strong>Právo na námietku:</strong> Môžete vznieť námietku proti spracúvaniu vašich údajov</li>
                <li><strong>Právo na sťažnosť:</strong> Máte právo podať sťažnosť na Úrad na ochranu osobných údajov SR</li>
            </ul>

            <h2>7. Bezpečnosť údajov</h2>
            <p>Implementujeme technické a organizačné opatrenia na ochranu vašich osobných údajov pred nepovolaným prístupom, zmenou, zverejnením alebo zničením. Medzi opatrenia patria:</p>
            <ul>
                <li>Šifrovanie údajov pri prenose (SSL/TLS)</li>
                <li>Bezpečné uchovávanie údajov v zabezpečených databázach</li>
                <li>Prístup iba autorizovanému personálu</li>
                <li>Pravidelné bezpečnostné audity</li>
            </ul>

            <h2>8. Tretie strany a externé odkazy</h2>
            <p>Naša webová stránka môže obsahovať odkazy na webové stránky tretích strán. Nezodpovedáme za ich politiku ochrany súkromia. Odporúčame vám prečítať si ich politiky ochrany údajov pred zdieľaním vašich údajov.</p>

            <h2>9. Zmeny tejto politiky</h2>
            <p>Vyhrazujeme si právo kedykoľvek zmeniť túto politiku ochrany súkromia. Všetky zmeny budú zverejnené na tejto stránke. Používaním našej webovej stránky po zverejnení zmien súhlasíte s upravenými podmienkami.</p>

            <h2>10. Kontakt</h2>
            <p>Ak máte akékoľvek otázky ohľadom tejto politiky ochrany súkromia alebo vašich osobných údajov, kontaktujte nás:</p>
            <p><strong>Email:</strong> info@regenzilina.sk<br>
            <strong>Telefón:</strong> +421 910 900 664<br>
            <strong>Adresa:</strong> J. M. Hurbana 4, Žilina 010 01, Slovensko</p>

            <p style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #ddd; font-size: 0.9em; color: #666;">
                Úrad na ochranu osobných údajov SR:<br>
                Bratislava, Slovensko<br>
                www.nrsr.sk
            </p>
        </div>
    </div>
</section>

@endsection
