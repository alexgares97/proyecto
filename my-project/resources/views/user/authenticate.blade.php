<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }}">
    <title>Login User</title>
    <meta charset="UTF-8">
</head>
<body>
    <div id="wrapper">
        <div class="cuadrado">
            @if ($login)
                <h2>Bienvenido, {{ $name }}!</h2>
                <p>Email: {{ $email }}</p>
                <br>
                <br>
                <a href="{{ route('content.index') }}" class="button1">Inicio</a>
            @else
                <h1>Ups! Datos introducidos no correctos</h1>
                <p>Revisa tu contraseña o usuario</p>
                <a href="{{ route('user.login') }}" class="button1">Vuelve a intentarlo</a>
            @endif
        </div>
    </div>
</body>
</html>
