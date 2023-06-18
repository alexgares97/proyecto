<!DOCTYPE html>
<html>
<head>
    <title>Añadir fichaje</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <div id="wrapper">
        <h1>Añadir Fichaje</h1>
        <div id="formConten">
            <form action="{{ route('content.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <dl>
                    <dt><label for="formnom">Equipo</label></dt>
                    <dd><input type="text" id="formnom" name="author"/></dd>
                    @error('author')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <dt><label for="formtitulo">Titulo</label></dt>
                    <dd><input type="text" id="formtitulo" name="title"/></dd>
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <dt><label for="formConte">Descripcion</label></dt>
                    <dd><textarea id="formConte" name="desc" cols="80" rows="10"></textarea></dd>
                    @error('noticia')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <dt><label for="formCont">Tags</label></dt>
                    <dd><input type="text" id="formCont" name="tags"/></dd><br>
                    @error('tags')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <dt><label for="formImg">Imagen</label></dt>
                    <dd><input type="file" name="image">
                    @error('image')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <br><br><br>
                    <dd><input type="submit" value="Añadir Contenido" class="button2"/></dd>
                    @csrf
                </dl>
            </form>
        </div>
        <a class="button2" style="margin-left:40px;size=50%" href="{{ route('content.index') }}">Volver</a>
    </div>
</body>
</html>
