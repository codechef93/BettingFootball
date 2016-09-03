<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Session;


class TeamController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {
        /*$search = "";
        if (isset($request) && isset($request->uname))
            $search = $request->uname;*/

        $teams = Team::all();

        return view("admin.team.index", ["teams", $teams]);
    }

    public function register() {
        return view("admin.team.register");
    }








}

