<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{   
	public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function policy()
    {
        return view('policy');
    }
     
    public function app()
    {
        return view('app');
    }   

    
}
