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

Route::get('/','VinoController@index');
Route::post('/addvinito','VinoController@store');
Route::get('/usuarios','UserController@index');
Route::post('/addusuario','UserController@store');
