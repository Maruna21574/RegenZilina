@extends('emails.layout')

@section('content')
<div style="text-align: center; margin-bottom: 24px;">
    <span style="display: inline-block; width: 56px; height: 56px; background-color: #e8f5e9; border-radius: 50%; line-height: 56px; font-size: 28px;">✓</span>
</div>

<h2 style="margin: 0 0 20px; color: #173124; font-size: 22px; text-align: center;">Vaša rezervácia je potvrdená!</h2>

<p style="color: #555; font-size: 15px; line-height: 1.6; margin: 0 0 24px; text-align: center;">
    Tešíme sa na vás! Nižšie nájdete detaily vašej rezervácie.
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
                    <td style="padding: 8px 0; color: #173124; font-size: 15px; font-weight: 600; text-align: right; border-top: 1px solid #e8e5e0;">{{ $reservation->date->format('d.m.Y') }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; border-top: 1px solid #e8e5e0;">Čas</td>
                    <td style="padding: 8px 0; color: #173124; font-size: 15px; font-weight: 600; text-align: right; border-top: 1px solid #e8e5e0;">{{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; border-top: 1px solid #e8e5e0;">Adresa</td>
                    <td style="padding: 8px 0; color: #173124; font-size: 15px; text-align: right; border-top: 1px solid #e8e5e0;">Horný val 10, 010 01 Žilina</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<div style="background-color: #fff8e1; border-radius: 8px; padding: 20px; margin-bottom: 24px;">
    <p style="margin: 0 0 8px; color: #8B6F47; font-size: 14px; font-weight: 600;">Ako sa pripraviť:</p>
    <ul style="margin: 0; padding-left: 20px; color: #666; font-size: 13px; line-height: 1.8;">
        <li>Príďte prosím 5 minút pred termínom</li>
        <li>Oblečte sa pohodlne</li>
        <li>Informujte nás o prípadných zdravotných obmedzeniach</li>
    </ul>
</div>

<p style="color: #888; font-size: 13px; line-height: 1.6; margin: 0;">
    Ak potrebujete zmeniť termín, kontaktujte nás na <strong><a href="tel:+421910900664" style="color: #888; text-decoration: none;">+421 910 900 664</a></strong> alebo <strong><a href="mailto:info@regenzilina.sk" style="color: #888; text-decoration: none;">info@regenzilina.sk</a></strong>.
</p>
@endsection
