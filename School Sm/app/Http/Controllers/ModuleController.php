<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use DB;


class ModuleController extends Controller
{
    /** index page module list */
    public function moduleList()
    {
        $moduleList = Module::all();
        return view('module.list-module',compact('moduleList'));
    }

    /** add module page */
    public function moduleAdd()
    {
        return view('module.add-module');
    }

    /** index page teacher grid */
    public function moduleGrid()
    {
        $moduleList = Module::all();
        return view('module.module-grid',compact('moduleList'));
    }
}
