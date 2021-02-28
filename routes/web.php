<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'namespace' => 'App\Api\Http\Controllers',
], function () {
    Route::get('/galaxies', 'GalaxyController@index');
    Route::get('/galaxies/{id}', 'GalaxyController@show');
    Route::post('galaxies', 'GalaxyController@create');

    Route::get('/planets', 'PlanetController@index');
    Route::get('/planet/{id}', 'PlanetController@show');
    Route::post('/planets/{id}', 'PlanetController@create');
});
