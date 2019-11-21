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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::resource('/contact','ContactController');
Route::resource('/contacto','ContactoController');
Route::resource('/gasto','GastoController');
Route::resource('/ingreso','IngresoController');

Route::view('/contact', 'contact')->name('contact');


Route::get('/redirect/{provider}','SocialController@redirect');
Route::get('/callback/{provider}','SocialController@callback');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::post('/email','MessagesController@store');

