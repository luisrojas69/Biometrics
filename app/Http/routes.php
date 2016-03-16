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

//Route::post('/login', function() {
Route::post('/dashboard', 'LoginController@dash');

Route::get('/faculty', 'LoginController@facu');

Route::post('/att', 'RecordController@index');

Route::get('/add_stud', function() {
    if(Request::ajax()) {
        return view('admin.add_stud');
    }
});

Route::post('/add_stud', 'RecordController@add_stud');

Route::post('/edit_stud', 'RecordController@edit_stud');

Route::get('/edit_stud', function() {
    if(Request::ajax()) {
        return view('admin.edit_stud');
    }
});

Route::post('post_req', 'RecordController@post');

Route::get('/del_stud', function() {
    if(Request::ajax()) {
        return view('admin.del_stud');
    }
});

Route::post('/del_stud', 'RecordController@del_stud');

Route::post('/del_final', 'RecordController@del_stud_final');

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

Route::post('/edit_co_post', 'RecordController@edit_co_post');

Route::post('/edit_co', 'RecordController@edit_co');

Route::get('/del_co', function() {
    if(Request::ajax()) {
        return view('admin.del_co');
    }
});

Route::post('/del_co', 'RecordController@del_co');

Route::post('/del_co_final', 'RecordController@del_co_final');

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

Route::post('/edit_facu_post', 'RecordController@edit_facu_post');

Route::post('/edit_facu', 'RecordController@edit_facu');

Route::get('/del_facu', function() {
    if(Request::ajax()) {
        return view('admin.del_facu');
    }
});

Route::post('/del_facu', 'RecordController@del_facu');

Route::post('/del_facu_final', 'RecordController@del_facu_final');

Route::get('/course', function() {
    return view('admin.course');
});

Route::get('/home', function() {
    if(Request::ajax()) {
        return view('admin.home');
    }
});

Route::get('/newpage', 'RecordController@newpage');
Route::get('/newpage', 'RecordController@newpageg');

Route::post('/newpage', 'RecordController@newpost');

Route::post('/getSubjects', 'RecordController@getSubjects');

/*Route::post('/post_req', function() {
    if(Request::ajax()) {
        return Response::json(Request::all());
    }
});*/