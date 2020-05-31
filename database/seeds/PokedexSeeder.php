<?php

use Illuminate\Database\Seeder;

class PokedexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokedex = \App\Pokedex::create([
            'user_id'=>'1',
            'name'=>'blue'
        ]);
        for ($i = 0; $i < 6; $i += 1) {
            $pokedex->pokemons()->attach(rand(0,700), ['order'=>$i]);
        }
        $pokedex = \App\Pokedex::create([
            'user_id'=>'1',
            'name'=>'red'
        ]);
        for ($i = 0; $i < 10; $i += 1) {
            $pokedex->pokemons()->attach(rand(0,700), ['order'=>$i]);
        }
    }
}
