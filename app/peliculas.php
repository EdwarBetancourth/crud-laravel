<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    protected $fillable = ['title', 'year', 'director', 'poster', 'rented', 'synopsis'];
}
