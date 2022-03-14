<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index(){
        echo '<h1>Fluent String</h1>';

        $slice = Str::of('Welcome to my YouTube Channel')->after('Welcome to');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 . '<br>';

        $string = Str::of('Hello')->append('World!!');
        echo $string . '<br>';

        $result = Str::of('LARAVEL 8')->lower();
        echo $result . '<br>';

        $replace = Str::of('Anas')->replace('s','x');
        echo $replace . '<br>';

        $converted = Str::of('this is string')->title();
        echo $converted . '<br>';

        $slug = Str::of('Laravel 8 framework')->slug('-');
        echo $slug . '<br>';

        $str = Str::of('Laravel Framework')->substr(0,8);
        echo $str . '<br>';

        $str2 = Str::of('/Laravel8/')->trim('/');
        echo $str2 . '<br>';

        $upper = Str::of('toupper')->upper();
        echo $upper . '<br>';
    }
}
