<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientBettingController extends Controller
{
    public function index(){
        return view('client.betting');
    }
}
