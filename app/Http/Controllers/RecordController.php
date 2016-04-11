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

        $values = DB::select("select sf.code, fid from subfacrels as sf inner join subjects as s on sf.code = s.code where sem like '%".$input['sem']."%' and branch like '%".$input['branch']."%' and secs like '%".$input['section']."%'");

        foreach ($values as $key => $value) {
            DB::insert('insert into relations (enid, code, fid, attended, total, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?)', 
                [$input['enid'], $value->code, $value->fid, 0, 0, Carbon::now(), Carbon::now()]);
        }
        return view('admin.admin_master');
    }
    
    public function add_co(Request $request)
    {
        $input = $request->all();
        $input['sem'] = implode(",", $input['sem']);
        $input['branch'] = implode(",", $input['branch']);
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        subject::create($input);
        return view('admin.admin_master');
    }
    
    public function add_facu(Request $request)
    {
        //return(var_dump($request->all()));
        $input = $request->all();
        $sections = array();
        $sec_temp = array();
        foreach ($input['sections'] as $key => $value) {
            $sec_temp = array_merge($sec_temp, str_split($value));
            $sections[$key] = implode(",", str_split($value));
        }
        $sec_temp = array_unique($sec_temp);
        $sec_temp = implode(",", $sec_temp);
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();

        DB::insert('insert into faculties (name, fid, email, branch, sections, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?)', [$input['name'], $input['fid'], $input['email'], $input['branch'], $sec_temp, $input['created_at'], $input['updated_at']]);
        //faculty::create($input);

        foreach ($input['sub'] as $key => $value) {
            DB::insert('insert into subfacrels (code, fid, secs, created_at, updated_at) values (?, ?, ?, ?, ?)', [$value, $input['fid'], $sections[$key], $input['created_at'], $input['updated_at']]);
        }

        return view('admin.add_facu');
        //return view('admin.admin_master');
    }
    
    public function edit_facu_post(Request $request)
    {
        if($request->ajax())
        {
            $faculty = DB::table('faculties')
                ->join('subfacrels', 'faculties.fid', '=', 'subfacrels.fid')
                ->select('*')
                ->where('faculties.fid','=',$request->get('id'))
                ->get();

            /*$sub_list = DB::table('subjects')
                ->select('name', 'code')
                ->where('branch', 'like', '%'.$faculty[0]->branch.'%')
                ->get();

            $sub_taught = DB::table('subfacrels')
                ->select('code')
                ->where('fid', '=', $faculty[0]->fid)
                ->get();

            $sub_taught = explode(",", $sub_taught[0]->code);

            $taught_temp = array();
            $list_temp = array();

            foreach ($sub_list as $key => $value)
            {
                if (in_array($value->code, $sub_taught))
                    array_push($taught_temp, $value);
                else
                    array_push($list_temp, $value);
            }*/

            //ty
            
            return view('admin.edit_facu_form')
                ->with(['faculty'=>$faculty, 'sub_list'=>$list_temp, 'sub_taught'=>$taught_temp]);
        }
    }
    
    public function edit_facu(Request $request)
    {
        if($request->ajax())
        {
            DB::table('faculties')
                ->where('fid', $request->get('enid'))
                ->update(['name' => $request->get('name'),
                          'branch' => $request->get('branch'),
                          'updated_at' => Carbon::now()
                         ]);

            DB::table('subfacrels')
                ->where('fid', $request->get('enid'))
                ->update(['code' => implode(",", $request->get('sub'))]);

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

            //return var_dump(explode(",", $co[0]->sem));

            //Store values in temp var
            $semTemp = explode(",", $co[0]->sem);
            $branchTemp = explode(",", $co[0]->branch);

            //delete properties from object
            unset($co[0]->sem);
            unset($co[0]->branch);

            //set fresh properties from temp vars
            $co[0]->sem = $semTemp;
            $co[0]->branch = $branchTemp;

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
                          'sem' => implode(",", $request->get('sem')),
                          'branch' => implode(",", $request->get('branch')),
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

            DB::table('subfacrels')
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
            $code = $request->get('enid');

            DB::table('subjects')
                ->where('code', '=', $code)
                ->delete();

            DB::table('subfacrels')
                ->where('code', '=', $code)
                ->delete();

            DB::table('relations')
                ->where('code', '=', $code)
                ->delete();
        }
    }
    
    public function newpage()
    {
        return view('newpage');
    }

    public function newpost()
    {
        if ($request->ajax())
        {
            $res = DB::table('subjects')
                ->select('branch')
                ->where('branch','like', 'C%')->get();
        }
        return var_dump($res[0]);
    }
    
    public function newpageg()
    {
        $var = DB::table('students')->select('*')->get();
        return var_dump($var[0]);
    }

    public function getSubjects(Request $request)
    {
        if ($request->ajax())
        {
            $branch = $request->get('branch');
            $str = '<div class="row">
                        <p class="input-field col s12">Select all subjects that will be taught by this teacher</p>';

            $res = DB::table('subjects')
                ->select('code', 'name')
                ->where('branch','like', '%'.$branch.'%')->get();

            if (count($res) == 0) {
                $str = '<div class="row center-align">No subjects available</div>';
            }

            else {
                $arr = array();
                foreach ($res as $key => $value)
                {
                    $str = $str.'<div class="input-field col s8">
                                    <input type="checkbox" id="'.$value->code.'" name="sub_name" value="'.$value->code.'">
                                    <label style = "color:black;" for="'.$value->code.'"><b>'.$value->name.' ('.$value->code.')</b></label>
                                </div>
                                <div class="input-field col s4">
                                    <select name="sec'.$value->code.'" multiple>
                                        <option value="" disabled selected>Choose section(s)</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>';

                    //array_push($arr, $value->code => $'sec'.$value->code.'[]');
                }
            }
            return $str;
        }
    }

    public function getSubjects_facuEdit(Request $request)
    {
        if ($request->ajax())
        {
            $branch = $request->get('branch');
            $str = '<div class="input-field col s12">
                        <select name="sub" multiple>
                            <option value="" disabled selected>Select Subjects</option>';

            $res = DB::table('subjects')
                ->select('code', 'name')
                ->where('branch','like', '%'.$branch.'%')->get();

            foreach ($res as $key => $value)
            {
                $str = $str.'<option value="'.$value->code.'">'.$value->name.' ('.$value->code.')</option>';
            }

            $str = $str.'</select></div>';
            return $str;
        }
    }

    public function co_monitor()
    {
        echo "inside course monitor";
    }

    public function facu_monitor()
    {
        echo "inside faculty monitor";
    }

    public function view_stud(Request $request)
    {
        if($request->ajax())
        {
            $stu = DB::select("Select * from students");

            return view('admin.view_stud')
                ->with(['stu'=>$stu]);
        }
    }

    public function view_facu(Request $request)
    {
        if($request->ajax())
        {
            $facu = DB::select("Select * from faculties");

            return view('admin.view_facu')
                ->with(['facu'=>$facu]);
        }
    }

    public function view_co(Request $request)
    {
        if($request->ajax())
        {
            $co = DB::select("Select * from subjects");

            return view('admin.view_co')
                ->with(['co'=>$co]);
        }
    }
}