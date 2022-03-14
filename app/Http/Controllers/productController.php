<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        $fruits = array('Mango','Orange','Banana');
        return view('Welcome',compact('fruits'));
    }
}
