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

Route::get('/deleteBarang/{id}', 'HomeController@delete')->name('deletebarang');
Route::get('/getDataBarang/{id}', 'HomeController@getDataBarang')->name('getdatabarang');
Route::resource('options', 'HomeController');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/update', 'HomeController@update')->name('update');


