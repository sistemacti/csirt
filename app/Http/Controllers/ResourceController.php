<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;

class ResourceController extends Controller
{
    public function index(){
        $resources = Resource::orderBy('id','desc')->get();
        return view('resources.index',compact('resources'));
    }
}
