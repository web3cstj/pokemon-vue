<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'AppController@index');

Route::group(['prefix'=>'pokemons', 'where'=>['pokemon'=>'[0-9]+']], function() {
    Route::get('/',                     'PokemonController@index');
    Route::get('/create',               'PokemonController@create');
    Route::post('/create',              'PokemonController@store');
    Route::get('/{pokemon}',            'PokemonController@show');
    Route::get('/edit/{pokemon}',       'PokemonController@edit');
    Route::post('/edit/{pokemon}',      'PokemonController@update');
    Route::get('/delete/{pokemon}',     'PokemonController@delete');
    Route::post('/delete/{pokemon}',    'PokemonController@destroy');
});
