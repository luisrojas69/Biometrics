<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\student;
use App\faculty;
use App\subject;
use App\relation;
use App\subfacrel;
use App\User;
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
        $input = $request->all();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        student::create($input);
        return view('admin.admin_master');
        //return redirect('/dashboard');
    }
    
    public function add_co(Request $request)
    {
        $input = $request->all();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        subject::create($input);
        return view('admin.admin_master');
    }
    
    public function add_facu(Request $request)
    {
        $input = $request->all();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        faculty::create($input);
        return view('admin.admin_master');
    }
    
    public function edit_facu_post(Request $request)
    {
        if($request->ajax())
        {
            $faculty = DB::table('faculties')
                ->select('*')
                ->where('fid','=',$request->get('id'))->get();
            
            return view('admin.edit_facu_form')
                ->with(['faculty'=>$faculty]);
        }
    }
    
    public function edit_facu(Request $request)
    {
        if($request->ajax())
        {
            DB::table('faculties')
                ->where('fid', $request->get('enid'))
                ->update(['name' => $request->get('name'),
                          'sem' => $request->get('sem'),
                          'branch' => $request->get('branch'),
                          'updated_at' => Carbon::now()
                         ]);
            return view('admin.edit_facu');
        }
    }
    
    public function post(Request $request)
    {
        if($request->ajax()) {
            $student = DB::table('students')
                ->select('*')
                ->where('enid','=',$request->get('id'))->get();
            
            return view('admin.edit_stud_form')
                ->with(['student'=>$student]);
        }
    }
    
    public function edit_stud(Request $request)
    {
        if($request->ajax())
        {
            DB::table('students')
                ->where('enid', $request->get('enid'))
                ->update(['name' => $request->get('name'),
                          'sem' => $request->get('sem'),
                          'branch' => $request->get('branch'),
                          'updated_at' => Carbon::now()
                         ]);
            return view('admin.edit_stud');
        }
    }
    
    public function edit_co_post(Request $request)
    {
        if($request->ajax())
        {
            $co = DB::table('subjects')
                ->select('*')
                ->where('code','=',$request->get('id'))->get();
            
            return view('admin.edit_co_form')
                ->with(['co'=>$co]);
        }
    }
    
    public function edit_co(Request $request)
    {
        if($request->ajax())
        {
            DB::table('subjects')
                ->where('code', $request->get('enid'))
                ->update(['name' => $request->get('name'),
                          'desc'=> $request->get('desc'),
                          'sem' => $request->get('sem'),
                          'branch' => $request->get('branch'),
                          'updated_at' => Carbon::now()
                         ]);
            return view('admin.edit_co');
        }
    }
    
    public function del_stud(Request $request)
    {
        if($request->ajax())
        {
            $student = DB::table('students')
                ->select('*')
                ->where('enid','=',$request->get('enid'))->get();
            
            return view('admin.del_stud_conf')
                ->with(['student' => $student]);
            /*return view('admin.edit_stud_form')
                ->with(['student'=>$student]);*/
        }
    }
    
    public function del_stud_final(Request $request)
    {
        if($request->ajax())
        {
            DB::table('students')
                ->where('enid', '=', $request->get('enid'))
                ->delete();
        }
    }
    
    public function del_facu(Request $request)
    {
        if($request->ajax())
        {
            //return $request->get('enid');
            $faculty = DB::table('faculties')
                ->select('*')
                ->where('fid','=',$request->get('enid'))->get();
            
            return view('admin.del_facu_conf')
                ->with(['faculty' => $faculty]);
        }
    }
    
    public function del_facu_final(Request $request)
    {
        if($request->ajax())
        {
            DB::table('faculties')
                ->where('fid', '=', $request->get('enid'))
                ->delete();
        }
    }
    
    public function del_co(Request $request)
    {
        if($request->ajax())
        {
            $co = DB::table('subjects')
                ->select('*')
                ->where('code','=',$request->get('enid'))->get();
            
            return view('admin.del_co_conf')
                ->with(['co' => $co]);
        }
    }
    
    public function del_co_final(Request $request)
    {
        if($request->ajax())
        {
            DB::table('subjects')
                ->where('code', '=', $request->get('enid'))
                ->delete();
        }
    }
    
    public function newpage()
    {
        return view('newpage');
    }
    
    public function newpageg()
    {
        $var = DB::table('students')->select('*')->get();
        return var_dump($var[0]);
    }
}