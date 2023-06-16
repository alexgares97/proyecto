<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div id="wrapper">
        <div id="formUser">
            <form action="{{ route('addUser') }}" method="post">
                <div class="form">
                    <form class="register-form">
                        <h2>Registro</h2>
                        <input type="text" id="formusername" name="UserName" placeholder="Usuario">
                        @error('UserName')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <input type="password" id="formpassword" name="Password" placeholder="Password">
                        @error('Password')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <input type="email" name="Email" placeholder="Email">
                        @error('Email')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <br>
                        <input type="checkbox" id="condicions" name="terms" required>
                        <label for="condicions">Acepto los términos y condiciones</label>
                        @error('terms')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <input type="submit" value="Crear Usuario" class="button">
                        @csrf
                    </form>

                    <div class="text-center">
                        <span class="txt1">¿Ya tienes cuenta?</span>
                        <a href="{{ route('loginUser') }}" class="txt2 hov1">Inicia Sesión</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
