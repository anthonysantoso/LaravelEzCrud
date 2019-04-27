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
    $value = array("", "", "", "", "", "");
    return view('welcome', ["value" => $value]);
});
Route::post('/create', 'CRUD@create');
Route::get('/thanks', 'CRUD@viewthanks')->name("");

Route::get('/view/{id}', 'CRUD@viewtext')->name("");

Auth::routes();

Route::get('/home', 'CRUD@index')->name('home');
