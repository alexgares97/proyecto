<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search Results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}" />
</head>

<body>
    @if(isset($error))
    <h1 id="errorbusqueda">{{ $error }}</h1>
    @else
    <div id="wikifinal">
        <div class="container">
            <div class="section">
                <div class="col span_2_of_3">
                    @foreach($results as $result)
                    <div class="wiki-post">
                        <h2 class="wiki-title"> Titulo: {{ $result->title }}</h2>
                        <h1 class="wiki-autor"> Autor: {{ $result->author }}</h1>
                        <p class="wiki-content"> Noticia: {{ $result->noticia }}</p>
                        <h2 class="date"> Tags: {{ $result->tags }}</h2>
                        <a href="{{ route('content.detail', ['id' => $result->sid]) }}">Detalles</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif

    <a class="botonvuelta" href="{{ route('index') }}">Volver al Home</a>
</body>

</html>
