<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function hello()
    {
        $page = 'Hello';
        return view('hello')->with('page', $page);
    }
    
    public function about()
    {
        $age = 19;
        $name = 'Abhinav Mathur';
        return view('about')->with([
            'aboutname' => $name,
            'role' => 'administrator',
            'page' => 'About',
            'age' => $age,
            ]);
    }
    
    public function show($id)
    {
        return ($id);
    }
}
