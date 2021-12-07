<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ProductsController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/tasks', TodoController::class);
Route::get('/tasks/search/{term?}',[TodoController::class,'search']);

Route::get('/',[ProductsController::class,'home']);

Route::resource('/products', ProductsController::class);

Route::get('/cart/add/{id}/{cat_id}/{qty}',[ProductsController::class,'addToCart']);

Route::get('cartdata',[ProductsController::class,'showcart']);

Route::get('/delete/item/{id}',[ProductsController::class,'destroy']);
Route::get('/delete/product/{id}',[ProductsController::class,'destroy_product']);

Route::view('/checkout','checkout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
