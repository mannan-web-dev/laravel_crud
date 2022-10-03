<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});




Route::get('/home', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('users.profile');
});

Route::get('/categories', [CategoryController::class,'index'])->name('categories.index');

Route::get('/categories/create', [CategoryController::class,'create'])->name('categories.create');

Route::post('/categories/store', [CategoryController::class,'store'])->name('categories.store');

Route::get('/categories/{id}', [CategoryController::class,'show'])->name('categories.show');

Route::get('/categories/{id}/delete', [CategoryController::class,'delete'])->name('categories.delete');





Route::get('/products', [ProductController::class,'products'])->name('products.index');
Route::get('/create', [ProductController::class,'create'])->name('products.create');
Route::post('/store', [ProductController::class,'store'])->name('products.store');




Route::get('/products/{id}', [ProductController::class,'Prodectshow'])->name('products.show');
Route::get('/products/{id}/delete', [ProductController::class,'delete'])->name('products.delete');

Route::get('/edit/{id}', [ProductController::class,'edit'])->name('products.edit');
Route::patch('/update/{id}', [ProductController::class,'update'])->name('products.update');




// Route::get('/users', function () {
//     return view('users.index');
// })->name('users.index');

// Route::get('/users/{id}', function ($userid) {
//     dd('showing.......'.$userid);
// })->name('user.show');

// OR

Route::prefix('users')->group (function(){

    Route::get('/', function () {
        return view('users.index');
    })->name('users.index');

    // Route::get('/{id}', function ($userid) {
    //     dd('showing.......'.$userid);
    // })->name('user.show');
    // OR

    Route::get('/{id}', [UserController::class,"show"]) ->name('user.show') ;
});



Route::fallback(function(){
    dd('Please give the corrext URL');
});
