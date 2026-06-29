@extends('emails.layout')

@section('content')
<h2 style="margin: 0 0 20px; color: #173124; font-size: 22px;">Ďakujeme za vašu rezerváciu</h2>

<p style="color: #555; font-size: 15px; line-height: 1.6; margin: 0 0 24px;">
    Vaša žiadosť o rezerváciu bola úspešne prijatá. Čaká na potvrdenie od nášho terapeuta.
    Čoskoro vás budeme kontaktovať.
</p>

<table width="100%" cellpadding="0" cellspacing="0" style="background-color: #FAF9F8; border-radius: 8px; padding: 24px; margin-bottom: 24px;">
    <tr>
        <td style="padding: 24px;">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="padding: 8px 0; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Služba</td>
                    <td style="padding: 8px 0; color: #173124; font-size: 15px; font-weight: 600; text-align: right;">{{ $reservation->service->name }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; border-top: 1px solid #e8e5e0;">Dátum</td>
                    <td style="padding: 8px 0; color: #173124; font-size: 15px; font-weight: 600; text-align: right; border-top: 1px solid #e8e5e0;">{{ $reservation->date->format('d.m.Y') }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; border-top: 1px solid #e8e5e0;">Čas</td>
                    <td style="padding: 8px 0; color: #173124; font-size: 15px; font-weight: 600; text-align: right; border-top: 1px solid #e8e5e0;">{{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; border-top: 1px solid #e8e5e0;">Meno</td>
                    <td style="padding: 8px 0; color: #173124; font-size: 15px; font-weight: 600; text-align: right; border-top: 1px solid #e8e5e0;">{{ $reservation->full_name }}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<p style="color: #888; font-size: 13px; line-height: 1.6; margin: 0;">
    Ak máte akékoľvek otázky, neváhajte nás kontaktovať na <strong><a href="tel:+421910900664" style="color: #888; text-decoration: none;">+421 910 900 664</a></strong> alebo <strong><a href="mailto:info@regenzilina.sk" style="color: #888; text-decoration: none;">info@regenzilina.sk</a></strong>.
</p>
@endsection
