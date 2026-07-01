<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prihlásenie — REGEN ŽILINA Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            background: #2c3527;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .login-card {
            background: #fff;
            border-radius: 16px;
            padding: 48px 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        .login-logo {
            display: block;
            height: 48px;
            margin: 0 auto 16px;
        }
        .login-card h1 {
            text-align: center;
            color: #6B7F5E;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }
        .login-card p {
            text-align: center;
            color: #999;
            font-size: 14px;
            margin-bottom: 32px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #555;
            margin-bottom: 6px;
        }
        .form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            font-family: inherit;
            transition: border-color 0.2s;
        }
        .form-group input:focus {
            outline: none;
            border-color: #6B7F5E;
        }
        .btn-login {
            width: 100%;
            padding: 14px;
            background: #6B7F5E;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            font-family: inherit;
            transition: opacity 0.2s;
        }
        .btn-login:hover { opacity: 0.9; }
        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 10px 16px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 20px;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #999;
            font-size: 13px;
            text-decoration: none;
        }
        .back-link:hover { color: #6B7F5E; }
    </style>
</head>
<body>
    <div class="login-card">
        <img src="{{ asset('img/logo_regen_def.webp') }}" alt="REGEN ŽILINA" class="login-logo">
        <h1>REGEN ŽILINA</h1>
        <p>Prihlásenie do administrácie</p>

        @if($errors->any())
            <div class="error">
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Heslo</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn-login">Prihlásiť sa</button>
        </form>

        <a href="/" class="back-link">← Späť na web</a>
    </div>
</body>
</html>
