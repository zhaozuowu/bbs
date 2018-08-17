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

Route::get('/','StaticPageController@index')->name('home');
Route::get('/about','StaticPageController@about')->name('about');
Route::get('/help','StaticPageController@help')->name('help');
Route::get('/signup','UsersController@signup')->name('signup');
Route::resource('/users','UsersController');

Route::get('/register','UsersController@register');
Route::get('/zhuce','UsersController@zhuce');
Auth::routes();

Route::get('login','SessionController@login')->name('login');
Route::post('login','SessionController@store')->name('login');

Route::get('/home', 'HomeController@index')->name('home');
