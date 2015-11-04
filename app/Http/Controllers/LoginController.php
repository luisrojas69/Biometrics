<?php

namespace App\Http\Controllers;

use App\student;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    
    public function newuser()
    {
        return view('newuser');
    }
    
    public function shownew(Requests\NewStudentRequest $request)
    {        
        student::create($request->all());
        
        return redirect('login');
    }
    
    public function show(Requests\LoginRequest $request)
    {
        $input = $request->all();
        return $input;
    }
}