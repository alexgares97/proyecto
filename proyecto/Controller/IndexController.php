<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getNoticia($id)
    {
        return Contenido::find($id);
    }

    public function getNoticias()
    {
        return Contenido::all();
    }

    public function createContenido($autor, $titulo, $noticia, $tags)
    {
        $contenido = new Contenido();
        $contenido->autor = $autor;
        $contenido->titulo = $titulo;
        $contenido->noticia = $noticia;
        $contenido->tags = $tags;
        $contenido->save();
    }

    public function deleteContenido($id)
    {
        Contenido::destroy($id);
    }

    public function updateContenido($autor, $titulo, $noticia, $tags, $year)
    {
        $contenido = Contenido::find($id);
        $contenido->autor = $autor;
        $contenido->titulo = $titulo;
        $contenido->noticia = $noticia;
        $contenido->tags = $tags;
        $contenido->year = $year;
        $contenido->save();
    }

    public function getContenidoById($id)
    {
        return Contenido::find($id);
    }

    public function editContenido($id, $autor, $titulo, $noticia, $tags)
    {
        $contenido = Contenido::find($id);
        $contenido->autor = $autor;
        $contenido->titulo = $titulo;
        $contenido->noticia = $noticia;
        $contenido->tags = $tags;
        $contenido->save();
    }
}