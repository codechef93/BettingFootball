<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;


class AccountController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {
        $users = User::all();
        return view("admin.account.index", compact("users"));
    }








}

