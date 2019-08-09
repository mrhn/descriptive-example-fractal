<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', 'UserController@all');
Route::get('/user/{id}', 'UserController@get');
Route::post('/user', 'UserController@create');
Route::patch('/user/{id}', 'UserController@patch');
Route::delete('/user/{id}', 'UserController@delete');
