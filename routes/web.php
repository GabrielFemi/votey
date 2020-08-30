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

Route::get('email', fn() => response()->json(['message' => 'Did you see my email?']))->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
   Route::get('dashboard', fn () => 'Welcome to the admin dashboard!');
});

Route::group(['prefix' => 'student'], function () {
    Route::get('dashboard', fn () => 'Welcome to the student dashboard!');
});

Route::group(['prefix' => 'contestant'], function () {
    Route::get('dashboard', fn () => 'Welcome to the contestant dashboard!');
});