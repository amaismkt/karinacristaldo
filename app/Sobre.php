<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sobre extends Model
{
    protected $table = 'about';

    protected $fillable = [
        'titulo', 'subtitulo', 'texto', 'subtexto', 'foto', 'icone'
    ];
}
