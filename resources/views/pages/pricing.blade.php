@extends('layouts.app')
@section('title', 'Cenník masáží a terapií | REGEN ŽILINA')
@section('meta_description', 'Cenník masáží a regenerácie v REGEN ŽILINA. Relaxačná masáž, športová masáž, pohybová regenerácia, bankovanie a ďalšie služby bez skrytých poplatkov.')
@section('meta_keywords', 'cenník masáží Žilina, cena masáže Žilina, koľko stojí masáž, lacná masáž Žilina, cenník terapie, cena bankovania, cena kineziotejpingu')

@section('content')

<section class="page-hero page-hero--short" style="background-image: url('{{ asset("img/pexels-koolshooters-6628690.webp") }}')">
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

@endsection
