<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// db::listen(function($query){
//     echo "<code>".$query->sql."</code>";
//     echo "<code>".$query->time."</code>";
// });

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('prestamo', 'api\PrestamoController')
    ->only([
        'index', 'show'
    ]);

    Route::get('prestamo/{licenciatura}/licenciatura', 'api\PrestamoController@licenciatura');
    Route::get('licenciatura', 'api\LicenciaturaController@index');
    Route::get('licenciatura/all', 'api\LicenciaturaController@all');