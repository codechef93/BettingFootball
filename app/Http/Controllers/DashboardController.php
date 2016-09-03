<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;


class DashboardController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {
        //return view('home');
        return Session::get("firstname")." ".Session::get("lastname")." ".Session::get("email");
    }


}

