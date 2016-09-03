<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index() {
        return view('index');
    }

    public function news(){
        return view('news');        
    }

    public function match(){
        return view('matches');        
    }

    public function team(){
        return view('team');        
    }

    public function about(){
        return view('about');        
    }

    public function contact(){
        return view('contact');        
    }
}

