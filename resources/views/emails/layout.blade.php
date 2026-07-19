<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0; padding: 0; background-color: #FAF9F8; font-family: 'Helvetica Neue', Arial, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #FAF9F8; padding: 40px 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.08);">
                    {{-- Header --}}
                    <tr>
                        <td style="background-color: #173124; padding: 32px 40px; text-align: center;">
                            <img src="{{ asset('img/regen_white.png') }}" alt="REGEN ŽILINA" style="height: 50px; width: auto; margin-bottom: 12px;">
                            <p style="margin: 0; color: rgba(255,255,255,0.7); font-size: 13px; letter-spacing: 1px;">Masáže · Pohybová regenerácia · Bankovanie</p>
                        </td>
                    </tr>
                    {{-- Body --}}
                    <tr>
                        <td style="padding: 40px;">
                            @yield('content')
                        </td>
                    </tr>
                    {{-- Footer --}}
                    <tr>
                        <td style="background-color: #f5f3f0; padding: 24px 40px; text-align: center; border-top: 1px solid #e8e5e0;">
                            <p style="margin: 0 0 8px; color: #8B6F47; font-size: 14px; font-weight: 600;">REGEN ŽILINA</p>
                            <p style="margin: 0; color: #999; font-size: 12px; line-height: 1.6;">
                                J. M. Hurbana 4, Žilina 01001<br>
                                Tel: <a href="tel:+421910900664" style="color: #999; text-decoration: none;">+421 910 900 664</a> · <a href="mailto:info@regenzilina.sk" style="color: #999; text-decoration: none;">info@regenzilina.sk</a>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
