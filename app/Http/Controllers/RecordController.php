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
        if(Request::ajax()) {
            /*$input = $request->get('id');
            $data = DB::table('students')->where('name')
            return View::make('edit_form');
        }
        return Response::error('404');*/
            return Response::json(Request::all());
        }
        else
        {
            return 'not an ajax call';
        }
    }
}