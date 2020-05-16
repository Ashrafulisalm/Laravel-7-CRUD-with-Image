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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('contacts','ContactController');

Route::get('/contacts','ContactController@index');
Route::post('/contacts/store','ContactController@store')->name('contacts.store');
Route::any('/contacts/del/{id}','ContactController@destroy')->name('contacts.destroy');
Route::get('/contacts/edit/{id}','ContactController@edit')->name('contacts.edit');
Route::post('/contacts/update/{id}','ContactController@update')->name('contacts.update');

