<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('nom_fr');
            $table->string('nom_en');
            $table->string('type1');
            $table->string('type2');
            $table->string('talents');
            $table->integer('pv');
            $table->integer('attaque');
            $table->integer('defense');
            $table->integer('attaque_speciale');
            $table->integer('defense_speciale');
            $table->integer('vitesse');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
}
