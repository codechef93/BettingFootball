<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Models\User;


class AdminUserController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {
        return view("admin.user.index");
    }

    public function get(Request $request){
        $search = "";
        if (isset($request->uname))
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

