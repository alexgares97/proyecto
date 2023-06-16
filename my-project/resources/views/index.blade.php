<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>TenisPedia</title>
</head>
<body>
    <form action="{{ route('search') }}" method="GET">
        <input id="busquedaportitle" type="text" name="query" placeholder="Búsqueda por título" />
        <input id="butonbusqueda" type="submit" value="Búsqueda" />
    </form>
    <h1></h1>

    <div id="wikifinal">
        <div class="container">
            <div class="section">
                <div class="col span_2_of_3">
                    @foreach($contents as $cnt)
                        <div class="wiki-post">
                            <h2 class="date">Fecha: {{ $cnt->year }}</h2>
                            <h1 class="wiki-autor">Autor: {{ $cnt->autor }}</h1>
                            <h1 class="wiki-title">Titulo: <a href="{{ route('content.details', $cnt->id) }}">{{ $cnt->titulo }}</a></h1>
                            <p class="wiki-content">Noticia: {{ $cnt->noticia }}</p>
                            <h2 class="date">Tags: {{ $cnt->tags }}</h2>

                            @if(isset(Auth::user()->UserName))
                                <a href="{{ route('content.edit', $cnt->id) }}">Editar</a>
                                <a href="{{ route('content.delete', $cnt->id) }}">Borrar</a>
                                <a href="{{ route('content.details', $cnt->id) }}">Detalles</a>
                            @endif
                        </div>
                    @endforeach

                    @if(isset(Auth::user()->UserName))
                        <a href="{{ route('content.create') }}" class="button">Agregar Contenido</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
       
