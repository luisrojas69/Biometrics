<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\student;
use App\faculty;
use App\subject;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Requests\RollNumRequest $request)
    {
        $input = $request->get('roll');
        
        if (strtoupper($input) == "14CSU009")
        {
            return redirect('/dashboard');
        }
        else
        {
            return redirect('/home');
        }
    }
    
    public function add_stud(Request $request)
    {
        student::create($request->all());
        return redirect('/dashboard');
    }
    
    public function add_co(Request $request)
    {
        subject::create($request->all());
        return redirect('/dashboard');
    }
    
    public function add_facu(Request $request)
    {
        faculty::create($request->all());
        return redirect('/dashboard');
    }
    
    public function edit(Request $request)
    {
        $input = $request->get('id');
        return $input;
    }
}