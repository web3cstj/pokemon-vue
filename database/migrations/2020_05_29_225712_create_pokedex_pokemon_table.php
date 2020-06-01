<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokedexPokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokedex_pokemon', function (Blueprint $table) {
            $table->id();
            $table->integer('pokedex_id');
            $table->foreign('pokedex_id')->on('pokedexes')->references('id');
            $table->integer('pokemon_id');
            $table->foreign('pokemon_id')->on('pokemons')->references('id');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokedex_pokemon');
    }
}
