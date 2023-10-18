<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classs;
use DB;

class ClassController extends Controller
{
    /** index page class list */
    public function class()
    {
        $classList = Classs::all();
        return view('class.list-class',compact('classList'));
    }

    /** add class page */
    public function classAdd()
    {
        return view('class.add-class');
    }

    /** index page class grid */
    public function classGrid()
    {
        $classList = Classs::all();
        return view('class.class-grid',compact('classList'));
    }


}
