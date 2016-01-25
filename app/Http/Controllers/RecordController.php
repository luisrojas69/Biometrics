<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\student;
use App\faculty;
use App\subject;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        //student::create($request->all());
        $input = Request::all();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        student::create($input);
        return redirect('/dashboard');
    }
    
    public function add_co(Request $request)
    {
        subject::create($request->all());
        return view('admin.admin_master');
    }
    
    public function add_facu(Request $request)
    {
        faculty::create($request->all());
        return redirect('/dashboard');
    }
    
    public function post(Request $request)
    {
        if($request->ajax()) {
            $student = DB::table('students')->select('*')->where('enid','=',$request->get('id'))->get();
            return view('admin.edit_stud_form')->with(['student'=>$student]);
        }
    }
    
    public function edit_stud(Request $request)
    {
        //
    }
}