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


Route::get('/',function(){
   return view('welcome');
});

Route::get('/usuario','UserController@index')
    ->name('users');

Route::get('/usuario/{user}','UserController@show')
    ->where('user','[0-9]+')
    ->name('user.show');

Route::post('/usuario','UserController@create')
    ->name('user.create');

Route::put('/usuario/{user}','UserController@update')
    ->name('user.update');

Route::delete('/usuario/{user}','UserController@destroy')
    ->name('user.destroy');
