<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $table = 'contenidos';
    protected $primaryKey = 'idCont';
    public $timestamps = false;

    protected $fillable = [
        'autor',
        'titulo',
        'noticia',
        'year',
        'tags',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function toArray()
    {
        return [
            'autor' => $this->autor,
            'titulo' => $this->titulo,
            'noticia' => $this->noticia,
            'year' => $this->year,
            'tags' => $this->tags,
        ];
    }
}
