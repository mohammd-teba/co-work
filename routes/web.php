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
//Route::namespace('Dashboard')->prefix('admin')->group(function() {
Route::namespace('Dashboard')->prefix('admin')->middleware('admin')->group(function() {
    Route::get('home', 'Home@index')->name('Dashboard.home');
    Route::resource('users' , 'Users')->except(['show']);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
