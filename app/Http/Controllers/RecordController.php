<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\student;
use App\faculty;
use App\subject;
use Illuminate\Support\Facades\DB;

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
            return redirect('dash');
        }
        else
        {
            return redirect('/index');
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
    
    public function post(Request $request)
    {
        if($request->ajax()) {
            $student = DB::table('students')->select('name')->where('enid','=',$request->get('id'))->get();
            return view('admin.edit_test', ['name' => $student[0]->name]);
        }
    }
}