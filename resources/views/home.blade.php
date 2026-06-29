@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="hero" id="hero">
    <div class="hero__overlay"></div>
    <div class="hero__content">
        <h1 class="hero__title fade-in">REGEN ŽILINA</h1>
        <p class="hero__subtitle fade-in fade-in--delay-1">Úľava od bolesti. Regenerácia tela aj mysle.</p>
        <div class="hero__cta fade-in fade-in--delay-2">
            <a href="#rezervacia" class="btn btn--gold">Rezervovať termín</a>
            <a href="#sluzby" class="btn btn--outline">Naše služby</a>
        </div>
    </div>
    <div class="hero__scroll">
        <span>Scroll</span>
        <div class="hero__scroll-line"></div>
    </div>
</section>

{{-- O NÁS --}}
<section class="section section--about" id="o-nas">
    <div class="container">
        <div class="section__header reveal">
            <span class="section__label">O nás</span>
            <h2 class="section__title">Profesionálna starostlivosť<br>o vaše telo</h2>
        </div>
        <div class="about__content reveal">
            <div class="about__text">
                <p>V <strong>REGEN ŽILINA</strong> sa špecializujeme na úľavu od bolesti chrbta a krku, regeneráciu, masáže, manuálnu terapiu a baňkovanie. Každá procedúra je prispôsobená individuálne podľa vašich potrieb a aktuálneho stavu.</p>
                <p>Naším cieľom je poskytnúť vám profesionálnu starostlivosť na najvyššej úrovni v príjemnom a relaxačnom prostredí.</p>
            </div>
        </div>
        <div class="about__cards">
            <div class="about__card reveal">
                <div class="about__card-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 15l-2 5l9-11h-5l2-5L7 15h5z"/></svg>
                </div>
                <h3>Skúsenosti</h3>
                <p>Dlhoročné skúsenosti v oblasti masáží a manuálnej terapie.</p>
            </div>
            <div class="about__card reveal reveal--delay-1">
                <div class="about__card-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <h3>Individuálny prístup</h3>
                <p>Každá procedúra je prispôsobená vašim konkrétnym potrebám.</p>
            </div>
            <div class="about__card reveal reveal--delay-2">
                <div class="about__card-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
                </div>
                <h3>Moderné techniky</h3>
                <p>Využívame overené aj moderné techniky pre maximálny účinok.</p>
            </div>
        </div>
    </div>
</section>

{{-- PRE KOHO SME --}}
<section class="section section--target" id="pre-koho">
    <div class="container">
        <div class="section__header reveal">
            <span class="section__label">Pre koho sme</span>
            <h2 class="section__title">Pomôžeme vám</h2>
        </div>
        <div class="target__grid">
            <div class="target__card reveal">
                <div class="target__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 20a6 6 0 0 0-12 0"/><circle cx="12" cy="10" r="4"/><circle cx="12" cy="12" r="10"/></svg>
                </div>
                <h3>Trápia ťa bolesti chrbta alebo krku?</h3>
                <p>Naša terapeutická masáž cielene uvoľní napätie a zmierni bolesť v problémových oblastiach.</p>
            </div>
            <div class="target__card reveal reveal--delay-1">
                <div class="target__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg>
                </div>
                <h3>Máš fyzicky náročnú prácu alebo si športovec?</h3>
                <p>Špeciálne regeneračné techniky pre rýchlejšie zotavenie a lepší výkon.</p>
            </div>
            <div class="target__card reveal reveal--delay-2">
                <div class="target__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3>Chceš sa jednoducho zrelaxovať?</h3>
                <p>Relaxačná masáž kombinovaná s baňkovaním pre dokonalé uvoľnenie tela aj mysle.</p>
            </div>
        </div>
    </div>
</section>

{{-- SLUŽBY --}}
<section class="section section--services" id="sluzby">
    <div class="container">
        <div class="section__header reveal">
            <span class="section__label">Naše služby</span>
            <h2 class="section__title">Typy masáží & procedúr</h2>
        </div>

        <div class="services__category reveal">
            <h3 class="services__category-title">Hlavné služby</h3>
            <div class="services__grid">
                @foreach($mainServices as $service)
                <div class="service-card reveal">
                    <div class="service-card__badge">{{ $service->duration }} min</div>
                    <h4 class="service-card__name">{{ $service->name }}</h4>
                    <p class="service-card__price">{{ number_format($service->price, 0) }}€</p>
                    <p class="service-card__desc">{{ $service->description }}</p>
                    <a href="#rezervacia" class="btn btn--small btn--gold" data-service="{{ $service->id }}">Rezervovať</a>
                </div>
                @endforeach
            </div>
        </div>

        <div class="services__category reveal">
            <h3 class="services__category-title">Doplnkové služby</h3>
            <div class="services__grid services__grid--addon">
                @foreach($addonServices as $service)
                <div class="service-card service-card--addon reveal">
                    <div class="service-card__badge">{{ $service->duration }} min</div>
                    <h4 class="service-card__name">{{ $service->name }}</h4>
                    <p class="service-card__price">{{ number_format($service->price, 0) }}€</p>
                    <p class="service-card__desc">{{ $service->description }}</p>
                    <a href="#rezervacia" class="btn btn--small btn--outline" data-service="{{ $service->id }}">Rezervovať</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- REZERVÁCIA --}}
<section class="section section--booking" id="rezervacia">
    <div class="container">
        <div class="section__header reveal">
            <span class="section__label">Rezervácia</span>
            <h2 class="section__title">Rezervujte si termín</h2>
            <p class="section__subtitle">Jednoduchá rezervácia v 4 krokoch</p>
        </div>

        <div class="booking reveal">
            {{-- Progress --}}
            <div class="booking__progress">
                <div class="booking__step booking__step--active" data-step="1">
                    <span class="booking__step-num">1</span>
                    <span class="booking__step-label">Služba</span>
                </div>
                <div class="booking__step" data-step="2">
                    <span class="booking__step-num">2</span>
                    <span class="booking__step-label">Termín</span>
                </div>
                <div class="booking__step" data-step="3">
                    <span class="booking__step-num">3</span>
                    <span class="booking__step-label">Údaje</span>
                </div>
                <div class="booking__step" data-step="4">
                    <span class="booking__step-num">4</span>
                    <span class="booking__step-label">Súhrn</span>
                </div>
            </div>

            <form id="bookingForm" class="booking__form">
                @csrf

                {{-- Step 1: Service --}}
                <div class="booking__panel booking__panel--active" data-panel="1">
                    <h3>Vyberte si službu</h3>
                    <div class="booking__services" id="bookingServices">
                        @foreach($allServices as $service)
                        <label class="booking__service-option">
                            <input type="radio" name="service_id" value="{{ $service->id }}" data-name="{{ $service->name }}" data-price="{{ $service->price }}" data-duration="{{ $service->duration }}">
                            <div class="booking__service-card">
                                <strong>{{ $service->name }}</strong>
                                <span>{{ $service->duration }} min — {{ number_format($service->price, 0) }}€</span>
                            </div>
                        </label>
                        @endforeach
                    </div>
                    <div class="booking__actions">
                        <button type="button" class="btn btn--gold booking__next" data-next="2" disabled>Ďalej</button>
                    </div>
                </div>

                {{-- Step 2: Date & Time --}}
                <div class="booking__panel" data-panel="2">
                    <h3>Vyberte dátum a čas</h3>
                    <div class="booking__datetime">
                        <div class="booking__calendar">
                            <label class="form-label">Dátum</label>
                            <input type="date" name="date" id="bookingDate" class="form-input" min="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="booking__times">
                            <label class="form-label">Dostupné časy</label>
                            <div class="booking__time-slots" id="timeSlots">
                                <p class="booking__time-placeholder">Najprv vyberte dátum</p>
                            </div>
                            <input type="hidden" name="time" id="bookingTime">
                        </div>
                    </div>
                    <div class="booking__actions">
                        <button type="button" class="btn btn--outline booking__prev" data-prev="1">Späť</button>
                        <button type="button" class="btn btn--gold booking__next" data-next="3" disabled>Ďalej</button>
                    </div>
                </div>

                {{-- Step 3: Contact info --}}
                <div class="booking__panel" data-panel="3">
                    <h3>Vaše kontaktné údaje</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="bookingName">Meno *</label>
                            <input type="text" name="name" id="bookingName" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="bookingSurname">Priezvisko *</label>
                            <input type="text" name="surname" id="bookingSurname" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="bookingPhone">Telefón *</label>
                            <input type="tel" name="phone" id="bookingPhone" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="bookingEmail">Email *</label>
                            <input type="email" name="email" id="bookingEmail" class="form-input" required>
                        </div>
                        <div class="form-group form-group--full">
                            <label class="form-label" for="bookingNote">Poznámka (voliteľná)</label>
                            <textarea name="note" id="bookingNote" class="form-input form-textarea" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="booking__actions">
                        <button type="button" class="btn btn--outline booking__prev" data-prev="2">Späť</button>
                        <button type="button" class="btn btn--gold booking__next" data-next="4">Ďalej</button>
                    </div>
                </div>

                {{-- Step 4: Summary --}}
                <div class="booking__panel" data-panel="4">
                    <h3>Súhrn rezervácie</h3>
                    <div class="booking__summary" id="bookingSummary">
                        <div class="booking__summary-row">
                            <span>Služba:</span>
                            <strong id="sumService">-</strong>
                        </div>
                        <div class="booking__summary-row">
                            <span>Dátum:</span>
                            <strong id="sumDate">-</strong>
                        </div>
                        <div class="booking__summary-row">
                            <span>Čas:</span>
                            <strong id="sumTime">-</strong>
                        </div>
                        <div class="booking__summary-row">
                            <span>Meno:</span>
                            <strong id="sumName">-</strong>
                        </div>
                        <div class="booking__summary-row">
                            <span>Telefón:</span>
                            <strong id="sumPhone">-</strong>
                        </div>
                        <div class="booking__summary-row">
                            <span>Email:</span>
                            <strong id="sumEmail">-</strong>
                        </div>
                        <div class="booking__summary-row">
                            <span>Cena:</span>
                            <strong id="sumPrice">-</strong>
                        </div>
                    </div>
                    <div class="booking__actions">
                        <button type="button" class="btn btn--outline booking__prev" data-prev="3">Späť</button>
                        <button type="submit" class="btn btn--gold" id="bookingSubmit">
                            <span class="btn__text">Odoslať rezerváciu</span>
                            <span class="btn__loader" style="display:none;">Odosielam...</span>
                        </button>
                    </div>
                </div>
            </form>

            {{-- Success --}}
            <div class="booking__success" id="bookingSuccess" style="display:none;">
                <div class="booking__success-icon">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h3>Rezervácia bola úspešne odoslaná!</h3>
                <p>Čoskoro vás kontaktujeme pre potvrdenie termínu. Na email sme vám poslali zhrnutie rezervácie.</p>
            </div>
        </div>
    </div>
</section>

{{-- CENNÍK --}}
<section class="section section--pricing" id="cennik">
    <div class="container">
        <div class="section__header reveal">
            <span class="section__label">Cenník</span>
            <h2 class="section__title">Prehľad cien</h2>
        </div>
        <div class="pricing__table reveal">
            <table>
                <thead>
                    <tr>
                        <th>Služba</th>
                        <th>Trvanie</th>
                        <th>Cena</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mainServices as $service)
                    <tr>
                        <td><strong>{{ $service->name }}</strong></td>
                        <td>{{ $service->duration }} min</td>
                        <td class="pricing__price">{{ number_format($service->price, 0) }}€</td>
                    </tr>
                    @endforeach
                    <tr class="pricing__divider"><td colspan="3"></td></tr>
                    @foreach($addonServices as $service)
                    <tr>
                        <td><strong>{{ $service->name }}</strong></td>
                        <td>{{ $service->duration }} min</td>
                        <td class="pricing__price">{{ number_format($service->price, 0) }}€</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- KONTAKT --}}
<section class="section section--contact" id="kontakt">
    <div class="container">
        <div class="section__header reveal">
            <span class="section__label">Kontakt</span>
            <h2 class="section__title">Spojte sa s nami</h2>
        </div>
        <div class="contact__grid">
            <div class="contact__info reveal">
                <div class="contact__item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <div>
                        <strong>Adresa</strong>
                        <p>Horný val 10, 010 01 Žilina</p>
                    </div>
                </div>
                <div class="contact__item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <div>
                        <strong>Telefón</strong>
                        <p><a href="tel:+421910900664" style="color: inherit; text-decoration: none;">+421 910 900 664</a></p>
                    </div>
                </div>
                <div class="contact__item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <div>
                        <strong>Email</strong>
                        <p>info@regenzilina.sk</p>
                    </div>
                </div>
                <div class="contact__item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    <div>
                        <strong>Otváracie hodiny</strong>
                        <p>Po – Pi: 9:00 – 18:00<br>So: po dohode<br>Ne: zatvorené</p>
                    </div>
                </div>
            </div>
            <div class="contact__form-wrapper reveal">
                <form id="contactForm" class="contact__form">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="contactName">Meno *</label>
                        <input type="text" name="name" id="contactName" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="contactEmail">Email *</label>
                        <input type="email" name="email" id="contactEmail" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="contactMessage">Správa *</label>
                        <textarea name="message" id="contactMessage" class="form-input form-textarea" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn--gold">Odoslať správu</button>
                    <div class="contact__form-message" id="contactMessage-result"></div>
                </form>
            </div>
        </div>
        <div class="contact__map reveal">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.5!2d18.7408!3d49.2233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDEzJzI0LjAiTiAxOMKwNDQnMjcuMCJF!5e0!3m2!1ssk!2ssk!4v1" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

@endsection
