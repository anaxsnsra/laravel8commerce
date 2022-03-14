<?php

use Illuminate\Support\Facades\Route;
use App\http\Livewire\HomeComponent;
use App\http\Livewire\ShopComponent;
use App\http\Livewire\CartComponent;
use App\http\Livewire\CheckoutComponent;
use App\http\Livewire\user\UserDashboardComponent;
use App\http\Livewire\admin\AdminDashboardComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);

Route::get('/shop',ShopComponent::Class);

Route::get('/cart',CartComponent::Class);

Route::get('/checkout',CheckoutComponent::Class);
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//route for normal or customer user
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//route for admin
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});
