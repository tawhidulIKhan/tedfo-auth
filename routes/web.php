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

Route::get('/', 'LoginController@index');


Route::post('/setfoo/set-session', 'PageController@setSession')->name('setfoo.set');

Auth::routes();

Route::group(['middleware' => ['check-foo']], function(){
    Route::get('/setfoo', 'PageController@index')->name('setfoo');

    Route::get('/home', 'HomeController@index')->name('home');

});


