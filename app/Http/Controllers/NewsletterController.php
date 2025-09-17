<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function index(){
        $newsletters = Newsletter::orderBy('id','desc')->get();
        return view('newsletters.index',compact('newsletters'));
    }
}
