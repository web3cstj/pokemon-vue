<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = "pokemons";

    function pokedexes() {
        return $this->belongsToMany('App\Pokedex');
    }
}
