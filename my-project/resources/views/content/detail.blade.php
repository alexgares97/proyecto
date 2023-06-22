<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
    <title>Fichajes</title>
</head>
<body>
    <div class="form">
        <form action="{{ route('content.search') }}" method="GET">
            <input id="busquedaportitle" type="text" name="query" placeholder="Búsqueda por titulo"/>
            <input id="butonbusqueda" type="submit" value="Busqueda" />
        </form>
    </div>
    <h1 class="inici">Fichaje</h1>
    <div id="wikifinal">
        <div class="container">
            <div class="section">
                <div class="col span_2_of_3">
                    <div class="wiki-post">
                        <h1 class="wiki-title"> {{ $content->title }}</h1>
                        <h3> Equipo: {{ $content->author }}</h3>
                        <img src="{{ asset('storage/' . $content->image) }}" alt="Element Image">
                        <p class="wiki-content"> {{ $content->desc }}</p>
                        <br><br>
                        <h2 class="date"> Tags: {{ $content->tags }}</h2>
                    </div>
                </div>
            </div>
                
            <table id="tabletres">
                <tr>
                    <td></td>
                    <td>
                    <div id="texttres">
                        <h1 style="color:white;">Últimos movimientos</h1>
                    </div>
                    <div id="titles">
                        @foreach ($latestElements as $element)
                        <a href="{{ route('content.detail', $element->id) }}">
                        <div class="entry-box-right">
                            <h2 class="entry-title">{{ $element->title }}</h2>
                            <p class="entry-author">{{ $element->author }}</p>
                            <div class="desc-limit">
                                <p class="entry-description">{{ $element->desc }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </td>
                </tr>
            </table>

            
        </div>
    </div>
    <div class="btn">
        <a class="button" style="size=1%;" href="{{ route('content.index') }}">Volver</a>
    </div>
</body>
</html>
