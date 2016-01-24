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

Route::post('/login', function() {
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

Route::post('/edit_stud', 'RecordController@edit');

Route::get('/edit_stud', function() {
    if(Request::ajax()) {
        return view('admin.edit_stud');
    }
});

Route::get('/del_stud', function() {
    if(Request::ajax()) {
        return view('admin.del_stud');
    }
});

Route::post('/add_co','RecordController@add_co');

Route::get('/add_co', function() {
    if(Request::ajax()) {
        return view('admin.add_co');
    }
});

Route::get('/edit_co', function() {
    if(Request::ajax()) {
        return view('admin.edit_co');
    }
});

Route::get('/del_co', function() {
    if(Request::ajax()) {
        return view('admin.del_co');
    }
});

Route::get('/add_facu', function() {
    if(Request::ajax()) {
        return view('admin.add_facu');
    }
});

Route::post('/add_facu', 'RecordController@add_facu');

Route::get('/edit_facu', function() {
    if(Request::ajax()) {
        return view('admin.edit_facu');
    }
});

Route::get('/del_facu', function() {
    if(Request::ajax()) {
        return view('admin.del_facu');
    }
});

Route::get('/course', function() {
    return view('admin.course');
});

Route::get('/home', function() {
    if(Request::ajax()) {
        return view('admin.home');
    }
});

Route::post('post_req', 'RecordController@post');

/*Route::post('/post_req', function() {
    if(Request::ajax()) {
        return Response::json(Request::all());
    }
});*/