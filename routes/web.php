<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [productController::class,'index'])->name('product.index');

Route::get('/homes/{name?}',[HomeController::class,'index'])->name('home.index');

Route::get('/user',[userController::class,'index'])->name('user.index');

Route::get('/posts',[ClientController::class,'getAllPost'])->name('post.getallpost');

Route::get('/posts/{id}',[ClientController::class,'postById'])->name('post.postbyid');

Route::get('/add-post',[ClientController::class,'addPost'])->name('post.addpost');

Route::get('/create-post',[ClientController::class,'updatePost'])->name('post.createpost');

Route::get('/delete-post/{id}',[ClientController::class,'deletePost'])->name('post.createpost');

Route::get('/fluent-string',[FluentController::class,'index'])->name('fluentstring.index');

Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkuser');

Route::post('/Login',[LoginController::class,'loginSubmit'])->name('login.submit');

Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');

Route::get('/session/set',[SessionController::class,'storedSessionData'])->name('session.stored');

Route::get('/session/delete',[SessionController::class,'deleteSessionData'])->name('session.delete');

Route::get('/posts',[PostController::class,'getAllPosts'])->name('post.getallpost');

Route::get('/add-posts',[PostController::class,'addPost'])->name('post.addpost');

Route::post('/add-posts',[PostController::class,'addPostSubmit'])->name('post.addsubmit');

Route::get('/posts/{id}',[PostController::class,'getPostById'])->name('post.getpostbyid');

Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.deletepostbyid');

Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.editpost');

Route::post('/update-post',[PostController::class,'updatePost'])->name('post.updatepost');

Route::get('/inner-join',[PostController::class,'innerJoinClause'])->name('post.innerjoinclause');

Route::get('/left-join',[PostController::class,'leftjoinClause'])->name('post.leftjoinclause');

Route::get('/right-join',[PostController::class,'rightjoinClause'])->name('post.rightjoinclause');

Route::get('/all-post',[PostController::class,'getAllPostUsingModel'])->name('post.getallpostusingmodel'); 


