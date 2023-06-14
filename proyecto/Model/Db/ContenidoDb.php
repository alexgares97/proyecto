<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContenidoDb extends Model
{
    protected $table = 'wiki';

    public function getNoticia($id)
    {
        return Contenido::find($id);
    }

    public function getNoticias()
    {
        return Contenido::all();
    }

    public function insertContenido($autor, $titulo, $noticia, $tags)
    {
        Contenido::create([
            'autor' => $autor,
            'titulo' => $titulo,
            'noticia' => $noticia,
            'tags' => $tags,
            'year' => 2022,
        ]);
    }

    public function deleteContenido($id)
    {
        $noticia = Contenido::find($id);
        if ($noticia) {
            $noticia->delete();
        }
        return $noticia;
    }

    public function editContenido($id, $autor, $titulo, $noticia, $tags)
    {
        $noticia = Contenido::find($id);
        if ($noticia) {
            $noticia->autor = $autor;
            $noticia->titulo = $titulo;
            $noticia->noticia = $noticia;
            $noticia->tags = $tags;
            $noticia->year = 2022;
            $noticia->save();
        }
    }

    public function getContenidoById($id)
    {
        return Contenido::find($id);
    }
}
