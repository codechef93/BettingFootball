<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;


class AuthController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {

        $this->validate($request, [
            'email_1' => 'required|max:50',
            'password_1' => 'required'
        ]);

        $user = User::where("email", $request->email_1)->where("password", $this->encrypt($request->password_1))->first();
        if ($user != null) {
            Session::put("firstname", $user->firstname);
            Session::put("lastname", $user->lastname);
            Session::put("email", $user->email);

            return redirect()->route("dashboard");
        }
        return redirect()->route("login");
    }

    public function signup() {
        return view('auth.signup');
    }

    public function register(Request $request) {
        $this->validate($request, [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'email' => 'required|unique:user,email|max:50',
            'password' => 'required'
        ]);

        User::create(
            array(
                "firstname"=>$request->firstname,
                "lastname"=>$request->lastname,
                "email"=>$request->email,
                "password"=>$this->encrypt($request->password)
            )
        );

        return redirect()->route("login");
    }

    public function logout() {
        Session::flush();
        return redirect()->route("login");
    }

    private function encrypt($string)
    {
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'This is my secret key';
        $secret_iv = 'This is my secret iv';
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        return base64_encode($output);
    }

    function decrypt($string) {
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'This is my secret key';
        $secret_iv = 'This is my secret iv';
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        return openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    function hashString($plain) {
        $hash_key = "b50798a216c26607d71ce2e1af783ef94abfed02d6d44492";
        $s = unpack("H*", hash_hmac('sha256', $plain, $hash_key, true));
        return	$s[1];
    }



}

