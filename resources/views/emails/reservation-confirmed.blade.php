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
                    <td style="padding: 8px 0;">
                        <p style="margin: 0 0 4px; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Služba</p>
                        <p style="margin: 0; color: #173124; font-size: 15px; font-weight: 600;">{{ $reservation->service->name }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; border-top: 1px solid #e8e5e0;">
                        <p style="margin: 0 0 4px; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Dátum</p>
                        <p style="margin: 0; color: #173124; font-size: 15px; font-weight: 600;">{{ $reservation->date->format('d.m.Y') }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; border-top: 1px solid #e8e5e0;">
                        <p style="margin: 0 0 4px; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Čas</p>
                        <p style="margin: 0; color: #173124; font-size: 15px; font-weight: 600;">{{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; border-top: 1px solid #e8e5e0;">
                        <p style="margin: 0 0 4px; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Adresa</p>
                        <p style="margin: 0; color: #173124; font-size: 15px;">J. M. Hurbana 4, 010 01 Žilina</p>
                    </td>
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
