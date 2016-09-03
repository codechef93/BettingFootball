<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Http\Controllers\Controller;


class AdminDashboardController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {
        return view("admin.index");
    }


}

