<?php

namespace App\Http\Controllers;

use App\Pokedex;
use App\User;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $pokedexes = Pokedex::all();
        return $pokedexes;
    }
    public function user(User $user) {
        $pokedexes = $user->pokedexes;
        return $pokedexes;
    }
    public function pokemons(Pokedex $pokedex) {
        $pokemons = $pokedex->pokemons;
        return $pokemons;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function show(Pokedex $pokedex) {
        return $pokedex;
    }
    public function full(Pokedex $pokedex) {
        $pokedex->user = $pokedex->user;
        $pokedex->pokemons = $pokedex->pokemons;
        return $pokedex;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokedex $pokedex) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokedex $pokedex) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokedex $pokedex) {
        //
    }
}
