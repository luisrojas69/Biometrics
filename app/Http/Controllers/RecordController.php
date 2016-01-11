<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $input = $request->all();
        return $input;
    }
    
    public function add_facu(Request $request)
    {
        $input = $request->all();
        return $input;
    }
}