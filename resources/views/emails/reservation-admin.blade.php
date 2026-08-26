@extends('emails.layout')

@section('content')
<h2 style="margin: 0 0 20px; color: #173124; font-size: 22px;">🔔 Nová rezervácia</h2>

<table width="100%" cellpadding="0" cellspacing="0" style="background-color: #FAF9F8; border-radius: 8px; margin-bottom: 24px;">
    <tr>
        <td style="padding: 24px;">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="padding: 8px 0;">
                        <p style="margin: 0 0 4px; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Meno</p>
                        <p style="margin: 0; color: #173124; font-size: 15px; font-weight: 600;">{{ $reservation->full_name }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; border-top: 1px solid #e8e5e0;">
                        <p style="margin: 0 0 4px; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Telefón</p>
                        <p style="margin: 0; color: #173124; font-size: 15px;">{{ $reservation->phone }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; border-top: 1px solid #e8e5e0;">
                        <p style="margin: 0 0 4px; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Email</p>
                        <p style="margin: 0; color: #173124; font-size: 15px;">{{ $reservation->email }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; border-top: 1px solid #e8e5e0;">
                        <p style="margin: 0 0 4px; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Služba</p>
                        <p style="margin: 0; color: #173124; font-size: 15px; font-weight: 600;">{{ $reservation->service->name }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; border-top: 1px solid #e8e5e0;">
                        <p style="margin: 0 0 4px; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Dátum a čas</p>
                        <p style="margin: 0; color: #173124; font-size: 15px; font-weight: 600;">{{ $reservation->date->format('d.m.Y') }} o {{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}</p>
                    </td>
                </tr>
                @if($reservation->note)
                <tr>
                    <td style="padding: 8px 0; border-top: 1px solid #e8e5e0;">
                        <p style="margin: 0 0 4px; color: #8B6F47; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Poznámka</p>
                        <p style="margin: 0; color: #173124; font-size: 15px;">{{ $reservation->note }}</p>
                    </td>
                </tr>
                @endif
            </table>
        </td>
    </tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td style="padding: 8px; text-align: center;">
            <a href="{{ url('/admin/rezervacie?status=pending') }}" style="display: inline-block; background-color: #6B7F5E; color: #ffffff; text-decoration: none; text-align: center; padding: 14px 32px; border-radius: 6px; font-size: 14px; font-weight: 600;">Zobraziť v admin paneli</a>
        </td>
    </tr>
</table>
@endsection
