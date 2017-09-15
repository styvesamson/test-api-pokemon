<?php

use Illuminate\Http\Request;

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


Route::post('/cadastro', 'UserController@store');
Route::post('/login', 'UserController@login');
Route::get('/user/getByToken', 'UserController@getByToken');


Route::resource('/user', 'UserController');
Route::resource('/pokemon', 'PokemonController');
Route::get('/pokemons', 'PokemonController@index');
Route::get('/pokemon/{id}', 'PokemonController@show');
Route::post('/pokemon/add', 'PokemonController@store');
Route::delete('/pokemon/{id}', 'PokemonController@destroy');

