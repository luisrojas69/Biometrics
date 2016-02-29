<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\student;
use App\faculty;
use App\subject;
use App\relation;
use App\subfacrel;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
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
        return view('index');
    }
    
    public function facu()
    {
        return view('faculty.facu');
    }

    public function dash()
    {
        $numStud = DB::table('students')->count();
        $numCo = DB::table('subjects')->count();
        $numFacu = DB::table('faculties')->count();

        return view('admin.admin_master', ['numStud' => $numStud, 'numCo' => $numCo, 'numFacu' => $numFacu]);
    }
}