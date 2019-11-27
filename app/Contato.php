<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contact';

    protected $fillable = [
        'email', 'telefone', 'endereco', 'emailContato'
    ];
}
