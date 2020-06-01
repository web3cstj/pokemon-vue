<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talents', function (Blueprint $table) {
            $table->id();
            $table->integer('generation');
            $table->string('nom_fr');
            $table->string('nom_en');
            $table->string('effet_combat')->nullable();
            $table->string('effet_terrain')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talent');
    }
}
