<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\allConrroller;
use App\Http\Controllers\blogConrroller;
use App\Http\Controllers\shopConrroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[allConrroller::class,'index'])->name('index');
Route::get('/main',[allConrroller::class,'main'])->name('main');
Route::get('/checkout',[allConrroller::class,'checkout'])->name('checkout');
Route::get('/contact',[allConrroller::class,'contact'])->name('contact');



Route::prefix("blog")->name('blog.')->group(function(){
    Route::get('/',[blogConrroller::class,'blog'])->name('blog');
    Route::get('details',[blogConrroller::class,'details'])->name('details');

});


Route::prefix("shop")->name('shop.')->group(function(){
Route::get('details',[shopConrroller::class,'details'])->name('details');
Route::get('/',[shopConrroller::class,'grid'])->name('grid');
Route::get('cart',[shopConrroller::class,'cart'])->name('cart');
});

