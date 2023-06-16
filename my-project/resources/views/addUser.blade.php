<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/adduser.css') }}">
</head>
<body>
    <div id="menu-nav">
        <div id="navigation-bar">
            <ul>
                <li><a href="{{ url('/') }}"><i class="fa fa-home"></i><span>Ir al inicio</span></a></li>
                <li><a href="{{ url('/register') }}"><i class="fa fa-address-card-o"></i><span>Registrarte</span></a></li>
                <li><a href="{{ url('/login') }}"><i class="fa fa-user"></i><span>Login</span></a></li>
            </ul>
        </div>
    </div>
</body>
</html>
