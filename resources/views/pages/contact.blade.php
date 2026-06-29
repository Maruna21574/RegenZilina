@extends('layouts.app')
@section('title', 'Kontakt — REGEN ŽILINA | Masáže v centre Žiliny')
@section('meta_description', 'Kontaktujte REGEN ŽILINA — Horný val 10, 010 01 Žilina. Telefón, email, otváracie hodiny a mapa. Objednajte sa na masáž ešte dnes.')
@section('meta_keywords', 'kontakt masáže Žilina, REGEN ŽILINA adresa, masáže Horný val Žilina, telefón masér Žilina, objednať sa na masáž')

@section('content')

<section class="page-hero page-hero--short">
    <div class="container">
        <span class="label label--light anim-fade">Kontakt</span>
        <h1 class="page-hero__title anim-fade" data-delay="1">Spojte sa<br><span>s nami</span></h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info anim-reveal">
                <div class="contact-info__item">
                    <div class="contact-info__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div>
                        <strong>Adresa</strong>
                        <p>Horný val 10, 010 01 Žilina</p>
                    </div>
                </div>
                <div class="contact-info__item">
                    <div class="contact-info__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.58 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                    <div>
                        <strong>Telefón</strong>
                        <p><a href="tel:+421910900664" style="color: inherit; text-decoration: none;">+421 910 900 664</a></p>
                    </div>
                </div>
                <div class="contact-info__item">
                    <div class="contact-info__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <div>
                        <strong>Email</strong>
                        <p>info@regenzilina.sk</p>
                    </div>
                </div>
                <div class="contact-info__item">
                    <div class="contact-info__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div>
                        <strong>Otváracie hodiny</strong>
                        <p>Po – Pi: 9:00 – 18:00<br>So: po dohode<br>Ne: zatvorené</p>
                    </div>
                </div>
            </div>
            <div class="contact-form-wrap anim-reveal" data-delay="1">
                <form id="contactForm" class="contact-form">
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
                        <label class="form-label" for="contactMsg">Správa *</label>
                        <textarea name="message" id="contactMsg" class="form-input form-textarea" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn--primary" style="width:100%;">
                        <span>Odoslať správu</span>
                    </button>
                    <div class="contact-form__msg" id="contactResult"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.5!2d18.7408!3d49.2233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDEzJzI0LjAiTiAxOMKwNDQnMjcuMCJF!5e0!3m2!1ssk!2ssk!4v1" width="100%" height="450" style="border:0;display:block;" allowfullscreen="" loading="lazy"></iframe>
</section>

@endsection
