<!-- index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/userstore.css') }}">
</head>
<body>
    <div class="header">
        <h1>Usuarios</h1>
    </div>
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="footer">
        <a class="button" href="{{ route('user.login') }}">Login</a>
        <br>
        <br>
        <a class="button" href="{{ route('user.create') }}">Registro</a>
    </div>
</body>
</html>
