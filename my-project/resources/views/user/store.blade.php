<!-- index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/userstore.css') }}">
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <div>
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

    <div id="menu-nav">
        <div id="navigation-bar">
            <ul>
                <li><a href="{{ route('user.create') }}"><i class="fa fa-address-card-o"></i><span>Registrarte</span></a></li>
                <li><a href="{{ route('user.login') }}"><i class="fa fa-user"></i><span>Login</span></a></li>
            </ul>
        </div>
    </div>
</body>
</html>
