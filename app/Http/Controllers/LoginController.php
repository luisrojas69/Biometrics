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
        
        return redirect('/');
    }
    
    public function show(Requests\LoginRequest $request)
    {
        $roll = $request->get('rollno');
        $pas = $request->get('pass');
        if($roll == 'admin' && $pas == 'pass')
        {
            return redirect('/newuser');
        }
        else
        {
            return redirect('/');
        }
    }
}