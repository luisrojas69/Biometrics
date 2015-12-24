<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'LoginController@adminlogin');

Route::post('/', 'LoginController@show');

Route::get('/newuser', 'LoginController@newuser');

Route::post('/newuser', 'LoginController@shownew');

Route::get('/home', 'LoginController@home');

Route::get('/dashboard', 'LoginController@dash');

Route::get('/faculty', 'LoginController@facu');