<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function api() {
        return redirect()->action("PokemonController@index");
    }
    public function index() {
        return view("spa.index");
    }
}
