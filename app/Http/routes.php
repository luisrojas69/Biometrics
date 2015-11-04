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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'PagesController@hello');

Route::get('about', 'PagesController@about');

Route::get('login', 'LoginController@login');

Route::post('login', 'LoginController@show');

Route::get('hello/{id}', 'PagesController@show');

Route::get('login/newuser', 'LoginController@newuser');

Route::post('login/newuser', 'LoginController@shownew');