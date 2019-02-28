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

Route::get('/beasiswa','BeasiswaController@index');
Route::post('/beasiswa/create','BeasiswaController@create');
Route::get('/beasiswa/{id}/edit','BeasiswaController@edit');
Route::post('/beasiswa/{id}/update','BeasiswaController@update');
Route::get('/beasiswa/{id}/delete','BeasiswaController@delete');