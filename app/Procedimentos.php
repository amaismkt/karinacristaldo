<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedimentos extends Model
{
    protected $table = 'procedimentos';

    protected $fillable = [
        'titulo', 'texto', 'imagem'
    ];
}
