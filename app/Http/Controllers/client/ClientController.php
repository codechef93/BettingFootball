<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
class ClientController extends Controller
{
    //
    public function index(){
        return view('client.index');
    }
}
