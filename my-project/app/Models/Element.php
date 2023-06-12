<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'author', 'date', 'desc', 'link', 'image', 'tags'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}

