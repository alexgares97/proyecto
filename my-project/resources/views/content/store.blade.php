<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Fichaje</title>
    <link rel="stylesheet" href="{{ asset('css/elementstore.css') }}">
</head>
<body>
    <div class="wrapper">
        <h1>Noticia Creada Correctamente</h1>
        <a class="button" href="{{ route('content.create') }}">Agregar otra noticia</a>
        <br><br>
        <a class="button" href="{{ route('content.index') }}">Volver al inicio</a>
    </div>
</body>
</html>
