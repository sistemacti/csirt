<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    public function index($type){
        $modules = Module::where('type',$type)->get();
        return view('modules.index',compact('modules','type'));
    }

    public function changeStatus(Module $module){
        $module->status = ($module->status==1) ? 0 : 1;
        $module->save();
        return redirect()->route('modules.index',$module->type);
    }
}
