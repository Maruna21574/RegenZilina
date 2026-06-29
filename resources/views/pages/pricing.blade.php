@extends('layouts.app')
@section('title', 'Cenník masáží a terapií | REGEN ŽILINA')
@section('meta_description', 'Cenník masáží a terapií v REGEN ŽILINA. Relaxačná masáž od 30€, športová masáž, manuálna terapia, baňkovanie a ďalšie procedúry. Transparentné ceny bez skrytých poplatkov.')
@section('meta_keywords', 'cenník masáží Žilina, cena masáže Žilina, koľko stojí masáž, lacná masáž Žilina, cenník terapie, cena baňkovania, cena kineziotejpingu')

@section('content')

<section class="page-hero page-hero--short">
    <div class="container">
        <span class="label label--light anim-fade">Cenník</span>
        <h1 class="page-hero__title anim-fade" data-delay="1">Transparentné<br><span>ceny</span></h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="pricing">
            <div class="pricing__list anim-reveal">
                @foreach($services as $i => $service)
                <div class="pricing__row {{ $service->category === 'addon' ? 'pricing__row--addon' : '' }}">
                    @if($i === 0)
                    <div class="pricing__group-label">Hlavné služby</div>
                    @endif
                    @if($service->category === 'addon' && ($services[$i-1]->category ?? '') !== 'addon')
                    <div class="pricing__group-label">Doplnkové služby</div>
                    @endif
                    <div class="pricing__row-inner">
                        <div class="pricing__row-left">
                            <h3>{{ $service->name }}</h3>
                            <span class="pricing__row-desc">{{ $service->description }}</span>
                        </div>
                        <div class="pricing__row-right">
                            <span class="pricing__row-duration">{{ $service->duration }} min</span>
                            <span class="pricing__row-price">{{ number_format($service->price, 0) }}€</span>
                            <a href="{{ route('booking') }}?service={{ $service->id }}" class="pricing__row-btn">Rezervovať</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="cta__inner anim-reveal">
            <h2 class="cta__title">Máte otázky k cenám?</h2>
            <p class="cta__text">Neváhajte nás kontaktovať — radi vám poradíme s výberom.</p>
            <a href="{{ route('contact') }}" class="btn btn--primary btn--lg">
                <span>Kontaktovať nás</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>

@endsection
