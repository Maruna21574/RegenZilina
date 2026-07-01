@extends('emails.layout')

@section('content')
<h2 style="margin: 0 0 20px; color: #173124; font-size: 22px;">Rezervácia bola zrušená</h2>

<p style="color: #555; font-size: 15px; line-height: 1.6; margin: 0 0 24px;">
    Ospravedlňujeme sa, ale vaša rezervácia bola zrušená. Nižšie nájdete pôvodné detaily.
</p>

<table width="100%" cellpadding="0" cellspacing="0" style="background-color: #FAF9F8; border-radius: 8px; margin-bottom: 24px;">
    <tr>
        <td style="padding: 24px;">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="padding: 8px 0; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Služba</td>
                    <td style="padding: 8px 0; color: #173124; font-size: 15px; font-weight: 600; text-align: right;">{{ $reservation->service->name }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; border-top: 1px solid #e8e5e0;">Dátum</td>
                    <td style="padding: 8px 0; color: #173124; font-size: 15px; text-align: right; border-top: 1px solid #e8e5e0;">{{ $reservation->date->format('d.m.Y') }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; border-top: 1px solid #e8e5e0;">Čas</td>
                    <td style="padding: 8px 0; color: #173124; font-size: 15px; text-align: right; border-top: 1px solid #e8e5e0;">{{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<p style="color: #555; font-size: 15px; line-height: 1.6; margin: 0 0 24px;">
    Ak máte záujem o nový termín, môžete si rezervovať priamo na našom webe.
</p>

<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <a href="{{ route('booking') }}" style="display: inline-block; background-color: #173124; color: #C9A96E; text-decoration: none; padding: 14px 32px; border-radius: 6px; font-size: 14px; font-weight: 600;">Nová rezervácia</a>
        </td>
    </tr>
</table>

<p style="color: #888; font-size: 13px; line-height: 1.6; margin: 24px 0 0;">
    Ak máte akékoľvek otázky, kontaktujte nás na <strong><a href="tel:+421910900664" style="color: #888; text-decoration: none;">+421 910 900 664</a></strong> alebo <strong><a href="mailto:info@regenzilina.sk" style="color: #888; text-decoration: none;">info@regenzilina.sk</a></strong>.
</p>
@endsection
