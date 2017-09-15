<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';

    protected $fillable = [
        'nome',
        'tipo',
        'poder_ataque',
        'poder_defesa',
        'agilidade',
    ];
}
