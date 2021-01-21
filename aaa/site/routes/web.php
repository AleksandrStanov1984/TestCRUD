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

//Route::get('/', 'App\Http\Controllers\MainController@home');
//Route::get('/home', 'App\Http\Controllers\MainController@home');

Route::get('/', 'App\Http\Controllers\NewUserController@home');
Route::get('/home', 'App\Http\Controllers\NewUserController@home');

Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: ' . $id . ' . NAME .' . $name;
});

Route::resource('post', 'App\Http\Controllers\NewUserController');

Route::resource('post', 'App\Http\Controllers\UserController');
