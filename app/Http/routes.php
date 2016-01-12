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

Route::post('/att', 'RecordController@index');

Route::post('/login', 'LoginController@dash');

Route::post('/add_stud', 'RecordController@add_stud');

Route::post('/add_facu', 'RecordController@add_facu');

Route::post('/edit_stud', 'RecordController@edit');