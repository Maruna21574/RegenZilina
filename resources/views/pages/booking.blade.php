@extends('layouts.app')
@section('title', 'Online rezervácia masáže | REGEN ŽILINA')
@section('meta_description', 'Rezervujte si termín masáže online v REGEN ŽILINA. Vyberte si službu, dátum a čas — jednoducho a rýchlo. Potvrdenie rezervácie okamžite na email.')
@section('meta_keywords', 'rezervácia masáže Žilina, objednať masáž online, termín masáže Žilina, online booking masáže, rezervácia terapie')

@section('content')

<section class="page-hero page-hero--short">
    <div class="container">
        <span class="label label--light anim-fade">Rezervácia</span>
        <h1 class="page-hero__title anim-fade" data-delay="1">Vyberte si<br><span>svoj termín</span></h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="booking anim-reveal">
            <div class="booking__progress">
                <div class="booking__step booking__step--active" data-step="1">
                    <span class="booking__step-num">1</span>
                    <span class="booking__step-text">Služba</span>
                </div>
                <div class="booking__step-line"></div>
                <div class="booking__step" data-step="2">
                    <span class="booking__step-num">2</span>
                    <span class="booking__step-text">Termín</span>
                </div>
                <div class="booking__step-line"></div>
                <div class="booking__step" data-step="3">
                    <span class="booking__step-num">3</span>
                    <span class="booking__step-text">Údaje</span>
                </div>
                <div class="booking__step-line"></div>
                <div class="booking__step" data-step="4">
                    <span class="booking__step-num">4</span>
                    <span class="booking__step-text">Súhrn</span>
                </div>
            </div>

            <form id="bookingForm" class="booking__form">
                @csrf

                {{-- Step 1 --}}
                <div class="booking__panel booking__panel--active" data-panel="1">
                    <h3 class="booking__panel-title">Vyberte si službu</h3>
                    <div class="booking__services" id="bookingServices">
                        @foreach($services as $service)
                        <label class="booking__svc">
                            <input type="radio" name="service_id" value="{{ $service->id }}" data-name="{{ $service->name }}" data-price="{{ $service->price }}" data-duration="{{ $service->duration }}">
                            <div class="booking__svc-card">
                                <div class="booking__svc-left">
                                    <strong>{{ $service->name }}</strong>
                                    <span>{{ $service->description }}</span>
                                </div>
                                <div class="booking__svc-right">
                                    <span class="booking__svc-duration">{{ $service->duration }} min</span>
                                    <span class="booking__svc-price">{{ number_format($service->price, 0) }}€</span>
                                </div>
                            </div>
                        </label>
                        @endforeach
                    </div>
                    <div class="booking__actions">
                        <div></div>
                        <button type="button" class="btn btn--primary booking__next" data-next="2" disabled>
                            <span>Ďalej</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </button>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="booking__panel" data-panel="2">
                    <h3 class="booking__panel-title">Vyberte dátum a čas</h3>
                    <div class="booking__datetime">
                        <div class="booking__date-col">
                            <label class="form-label">Dátum</label>
                            <input type="date" name="date" id="bookingDate" class="form-input" min="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="booking__time-col">
                            <label class="form-label">Dostupné časy</label>
                            <div class="booking__slots" id="timeSlots">
                                <p class="booking__slots-msg">Najprv vyberte dátum</p>
                            </div>
                            <input type="hidden" name="time" id="bookingTime">
                        </div>
                    </div>
                    <div class="booking__actions">
                        <button type="button" class="btn btn--ghost-dark booking__prev" data-prev="1">Späť</button>
                        <button type="button" class="btn btn--primary booking__next" data-next="3" disabled>
                            <span>Ďalej</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </button>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="booking__panel" data-panel="3">
                    <h3 class="booking__panel-title">Vaše kontaktné údaje</h3>
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
                        <button type="button" class="btn btn--ghost-dark booking__prev" data-prev="2">Späť</button>
                        <button type="button" class="btn btn--primary booking__next" data-next="4">
                            <span>Ďalej</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </button>
                    </div>
                </div>

                {{-- Step 4 --}}
                <div class="booking__panel" data-panel="4">
                    <h3 class="booking__panel-title">Skontrolujte údaje</h3>
                    <div class="booking__summary">
                        <div class="booking__sum-row"><span>Služba</span><strong id="sumService">-</strong></div>
                        <div class="booking__sum-row"><span>Dátum</span><strong id="sumDate">-</strong></div>
                        <div class="booking__sum-row"><span>Čas</span><strong id="sumTime">-</strong></div>
                        <div class="booking__sum-row"><span>Meno</span><strong id="sumName">-</strong></div>
                        <div class="booking__sum-row"><span>Telefón</span><strong id="sumPhone">-</strong></div>
                        <div class="booking__sum-row"><span>Email</span><strong id="sumEmail">-</strong></div>
                        <div class="booking__sum-row booking__sum-row--total"><span>Cena</span><strong id="sumPrice">-</strong></div>
                    </div>

                    <div class="booking__discount">
                        <label class="form-label">Zľavový kód (voliteľný)</label>
                        <div class="booking__discount-row">
                            <input type="text" name="discount_code" id="discountCode" class="form-input" placeholder="Napr. REGEN10-ABC123" style="text-transform:uppercase;">
                            <button type="button" class="btn btn--primary btn--sm" id="discountApply">Použiť</button>
                        </div>
                        <div class="booking__discount-msg" id="discountMsg"></div>
                    </div>

                    <div class="booking__actions">
                        <button type="button" class="btn btn--ghost-dark booking__prev" data-prev="3">Späť</button>
                        <button type="submit" class="btn btn--primary" id="bookingSubmit">
                            <span class="btn__text">Odoslať rezerváciu</span>
                            <span class="btn__loader" style="display:none;">Odosielam...</span>
                        </button>
                    </div>
                </div>
            </form>

            {{-- Success --}}
            <div class="booking__success" id="bookingSuccess" style="display:none;">
                <div class="booking__success-icon">
                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h3>Rezervácia odoslaná!</h3>
                <p>Ďakujeme. Čoskoro vás kontaktujeme pre potvrdenie termínu. Skontrolujte svoj email.</p>
                <a href="{{ route('home') }}" class="btn btn--primary" style="margin-top:24px;">Späť na hlavnú stránku</a>
            </div>
        </div>
    </div>
</section>

@endsection
