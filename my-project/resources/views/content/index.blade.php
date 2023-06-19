<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>Wiki</title>
</head>
<body>
    <div class="form">
        <form action="{{ route('content.search') }}" method="GET">
            <input id="busquedaportitle" type="text" name="query" placeholder="Búsqueda por título" />
            <input id="butonbusqueda" type="submit" value="Búsqueda" />
        </form>
    </div>

    <div id="wikifinal">
        <div class="container">
            <div class="section">
                <div class="col span_2_of_3">
                    @foreach($contents as $cnt)
                    <a href="{{ route('content.detail', $cnt->id) }}">
                        <div class="wiki-post">
                            <h2 class="date">Fecha: {{ $cnt->date }}</h2>
                            <h1 class="wiki-title">Titulo: {{ $cnt->title }}</h1>
                            <h3>Equipo: {{ $cnt->author }}</h3>
                            <p class="wiki-content">Noticia: {{ $cnt->desc }}</p>
                            <h2 class="date">Tags: {{ $cnt->tags }}</h2>
                            @if(isset(Auth::user()->UserName))
                                <a href="{{ route('content.edit', $cnt->id) }}">Editar</a>
                                <a href="{{ route('content.delete', $cnt->id) }}">Borrar</a>
                                <a href="{{ route('content.details', $cnt->id) }}">Detalles</a>
                            @endif
                        </div>
                    </a>    
                    @endforeach
                    <a class="button" style="size=20%" href="{{ route('content.create') }}">Añadir fichaje</a>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
       
