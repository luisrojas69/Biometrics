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

Route::get('/', 'LoginController@home');

Route::post('/', 'LoginController@show');

Route::get('/newuser', 'LoginController@newuser');

Route::post('/newuser', 'LoginController@shownew');

//Route::get('/home', 'LoginController@home');

//Change back to LoginController@dash
Route::get('/dashboard', function() {
    return view('admin.admin_master');
});

Route::get('/faculty', 'LoginController@facu');

Route::post('/att', 'RecordController@index');

Route::get('/add_stud', function() {
    if(Request::ajax()) {
        return view('admin.add_stud');
    }
});

Route::post('/add_stud', 'RecordController@add_stud');

Route::post('/add_facu', 'RecordController@add_facu');

Route::post('/edit_stud', 'RecordController@edit');

Route::post('/add_co','RecordController@add_co');

Route::get('/course', function() {
    return view('admin.course');
});

Route::get('/home', function() {
    if(Request::ajax()) {
        return view('admin.home');
    }
});