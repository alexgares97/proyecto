<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <title>Login User</title>
    <meta charset="UTF-8">
</head>
<body style="background-color:#83BF1A;">
    <div id="wrapper">
        <div id="formUser">
            <form action="{{ route('loginUser') }}" method="post">
                <div class="form">
                    <span class="login100-form-title p-b-33">
                        Login
                    </span>
                    <form class="login-form">
                        @csrf
                        <input type="text" id="formusername" name="UserName" placeholder="Usuario"/>
                        <input type="password" id="formpassword" name="Password" placeholder="Password"/>
                        <input type="submit" value="Entrar" class="button" />
                    </form>
                    <br>
                    <div class="text-center">
                        <span class="txt1">
                            ¿Aún no tienes una cuenta?
                        </span>
                        <a href="{{ route('register') }}" class="txt2 hov1">
                            Regístrate
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
