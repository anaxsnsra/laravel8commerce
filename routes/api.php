<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/{name?}',function($name = null){
    return 'Hi ' . $name;
})->where('name','[a-zA-Z]+');

Route::get('product/{id?}',function($id = null){
    return 'Product id is ' . $id;
})->where('id','[0-9]+');

Route::match(['get','post'],'/students',function(Request $request){
    return 'Requested method is ' . $request->method(); 
});

Route::any('/posts',function(Request $request){
    return 'Requested method is ' . $request->method();
});

Route::get('/profile',[ProfileController::class,'List'])->name('profile.list');


