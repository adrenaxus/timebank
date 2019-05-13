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
    return redirect('/it');
});

Route::get('/de', function () {
    return view('home.de.index');
});
Route::get('/it', function () {
    return view('home.it.index');
});
Route::get('/ld', function () {
    return view('home.ld.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
