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

Route::get('profile', 'UserController@profile')->name('profile');
Route::post('/profile', 'UserController@update_avatar')->name('profile');

Route::resource('post' , 'PostController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//facebook socilite
Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider')->name('auth');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');
