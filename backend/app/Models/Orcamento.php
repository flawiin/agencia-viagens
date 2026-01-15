<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'celular',
        'data_ida',
        'data_volta',
        'origem',
        'destino',
        'quarto_infantil',
        'piscina',
        'wifi',
        'garagem',
        'suite',
    ];
}
