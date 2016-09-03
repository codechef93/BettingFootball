<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Models\User;


class MatchController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {
        $this->get(null);
    }

    public function get(Request $request = null){
        $search = "";
        if (isset($request) && isset($request->uname))
            $search = $request->uname;
        if (!empty($search)) {
            $users = User::where("firstname", "like", "%".$search."%")
                ->orwhere("lastname", "like", "%".$search."%")
                ->orwhere("email", "like", "%".$search."%")->get();
        } else
            $users = User::all();

        return view("admin.user.index", ["users", $users]);
    }








}

