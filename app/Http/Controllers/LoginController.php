<?php

namespace App\Http\Controllers;

use App\student;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class LoginController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('auth',['only'=>'newuser']);
    //}
    
    public function adminlogin()
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
        $input=$request->all();
        return $input;
    }
    
    public function home()
    {
        return view('home');
    }
    
    public function dash()
    {
        return view('dash');
    }
    
    public function facu()
    {
        return view('facu');
    }
}