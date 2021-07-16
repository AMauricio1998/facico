<?php

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

use Illuminate\Support\Facades\Route;

 Route::get('/home', function () {
     return view('welcome');
 })->name('home');

Route::resource('dashboard/prestamo', 'PrestamoController');
Route::post('dashboard/prestamo/{prestamo}/image', 'PrestamoController@imagen')->name('prestamo.imagen');

Route::resource('dashboard/licenciatura', 'licenciaturaController');


//---------------------------------------------------------------------------------

Route::name('login')->get('/', 'LoginController@login');
Route::name('validar')->post('validar/', 'LoginController@validar');
Route::name('logout')->get('logout/', 'LoginController@logout');

