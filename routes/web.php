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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

  Route::get('/', function () {
      return view('welcome');
  })->name('home');

Route::resource('dashboard/prestamo', 'PrestamoController');
Route::post('dashboard/prestamo/{prestamo}/image', 'PrestamoController@imagen')->name('prestamo.imagen');

Route::resource('dashboard/licenciatura', 'licenciaturaController');
Route::resource('dashboard/user', 'UserController');


//---------------------------------------------------------------------------------


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
