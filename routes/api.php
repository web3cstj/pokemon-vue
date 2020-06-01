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

Route::group(['prefix'=>'pokemon', 'where'=>['pokemon'=>'[0-9]+']], function() {
    Route::get('/',                     'PokemonController@index');
    Route::get('/range/{qty}/{start}',  'PokemonController@range')->where(['qty'=>'[0-9]+','start'=>'[0-9]+',]);
    Route::get('/create',               'PokemonController@create');
    Route::post('/create',              'PokemonController@store');
    Route::get('/{pokemon}',            'PokemonController@show');
    Route::get('/{pokemon}/edit',       'PokemonController@edit');
    Route::post('/{pokemon}/edit',      'PokemonController@update');
    Route::get('/{pokemon}/delete',     'PokemonController@delete');
    Route::post('/{pokemon}/delete',    'PokemonController@destroy');
});
Route::group(['prefix'=>'pokedex', 'where'=>['pokedex'=>'[0-9]+', 'user'=>'[0-9]+']], function() {
    Route::get('/',                     'PokedexController@index');
    Route::get('/user/{user}',          'PokedexController@user');
    Route::get('/create',               'PokedexController@create');
    Route::post('/create',              'PokedexController@store');
    Route::get('/{pokedex}',            'PokedexController@show');
    Route::get('/{pokedex}/full',       'PokedexController@full');
    Route::get('/{pokedex}/pokemons',   'PokedexController@pokemons');
    Route::get('/{pokedex}/edit',       'PokedexController@edit');
    Route::post('/{pokedex}/edit',      'PokedexController@update');
    Route::get('/{pokedex}/delete',     'PokedexController@delete');
    Route::post('/{pokedex}/delete',    'PokedexController@destroy');
});
Route::group(['prefix'=>'user', 'where'=>['user'=>'[0-9]+']], function() {
    Route::get('/',                  'UserController@index');
    Route::get('/create',            'UserController@create');
    Route::post('/create',           'UserController@store');
    Route::get('/{user}',            'UserController@show');
    Route::get('/{user}/pokedexes',  'PokedexController@user');
    Route::get('/{user}/edit',       'UserController@edit');
    Route::post('/{user}/edit',      'UserController@update');
    Route::get('/{user}/delete',     'UserController@delete');
    Route::post('/{user}/delete',    'UserController@destroy');
});
Route::group(['prefix'=>'talent', 'where'=>['talent'=>'[0-9]+']], function() {
    Route::get('/',                  'TalentController@index');
    Route::get('/create',            'TalentController@create');
    Route::post('/create',           'TalentController@store');
    Route::get('/{talent}',          'TalentController@show');
    Route::get('/{nom}',             'TalentController@showNom');
    Route::get('/{talent}/edit',     'TalentController@edit');
    Route::post('/{talent}/edit',    'TalentController@update');
    Route::get('/{talent}/delete',   'TalentController@delete');
    Route::post('/{talent}/delete',  'TalentController@destroy');
});
