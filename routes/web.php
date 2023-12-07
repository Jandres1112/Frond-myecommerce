

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\partialsController;

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

Route::get('/', function () {
    return view('auth/login');
});

//Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [UserController::class, 'actionEdit'])->name('user.action.edit');
Route::put('/user/{id}', [UserController::class, 'edit'])->name('user.edit');

Route::get('/seller', [SellerController::class, 'index'])->name('seller');
Route::post('/seller', [SellerController::class, 'store'])->name('seller.store');
Route::get('/seller/edit/{id}', [SellerController::class, 'actionEdit'])->name('seller.action.edit');
Route::put('/seller/{id}', [SellerController::class, 'edit'])->name('seller.edit');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('dashboard/post', PostController::class);
Route::resource('dashboard/Category', CategoryController::class);
Route::resource('dashboard/partials', partialsController::class);
Route::get('/contatsblade', function(){return view('contatsblade');});
Route::get('/master', function(){return view('master');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
