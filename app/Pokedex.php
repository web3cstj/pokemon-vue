<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    function user() {
        return $this->belongsTo('App\User');
    }

    function pokemons() {
        return $this->belongsToMany('App\Pokemon');
    }
}
