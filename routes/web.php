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
Route::get('/hello', 'App\Http\Controllers\HelloController@index');

Route::get('/greeting', 'App\Http\Controllers\GreetingController@index');
Route::post('/greeting/welcome', 'App\Http\Controllers\GreetingController@welcome');
