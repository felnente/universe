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

Route::group([
    'namespace' => 'App\Api\Http\Controllers',
], function () {
    Route::get('/galaxies', 'GalaxyController@index');
    Route::get('/galaxies/{id}', 'GalaxyController@show');
    Route::post('galaxies', 'GalaxyController@create');

    Route::get('/planets', 'PlanetController@index');
    Route::get('/planet/{id}', 'PlanetController@show');
    Route::post('/planets', 'PlanetController@create');
});


