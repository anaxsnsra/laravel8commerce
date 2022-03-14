<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create(){
        
    }

    public function index(){
        return view('login');
    }

    public function loginSubmit(Request $req){

        $validate = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);
        $email = $req->input('email');
        $pass = $req->input('password');
        return 'Email : ' . $email . 'Password : ' . $pass;
    }
}
