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

  // Route::get('/', function () {
  //     return view('welcome');
  // })->name('home');

Route::resource('dashboard/prestamo', 'PrestamoController');
Route::post('dashboard/prestamo/{prestamo}/image', 'PrestamoController@imagen')->name('prestamo.imagen');
Route::post('dashboard/prestamo/proccess/{prestamo}', 'PrestamoController@proccess');

Route::get('/prestamo-all', 'PrestamoController@prestamoall')->name('prestamo.all');



Route::resource('dashboard/licenciatura', 'licenciaturaController');
Route::resource('dashboard/user', 'UserController');
Route::resource('dashboard/contact', 'ContactController');
//------------------Excel--------------------------------------------------------

Route::get('/dashboard/excel/prestamo-export', 'PrestamoController@export')->name('prestamo.export');

//---------------------------------PDF--------------------------------------------

Route::name('prestamo.pdf')->get('/prestamo/pdf', 'PrestamoController@exportPDF');

//---------------------------------------------------------------------------------


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'web\WebController@index')->name('index');
Route::get('/detail/{id}', 'web\WebController@detail');
Route::get('/prestamo-licenciatura/{id}', 'web\WebController@prestamo_licenciatura');
Route::get('/contact', 'web\WebController@contact');

Route::get('/licenciaturas', 'web\WebController@index')->name('index');

