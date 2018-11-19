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
})->name('welcome');

/*Route::get('/hire-me', function () {
    return view('contact');
});*/

Route::get('hire-me', 'ContactController@create')->name('contact.create');
Route::post('hire-me', 'ContactController@store')->name('contact.store');