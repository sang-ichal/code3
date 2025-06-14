<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('products.index');
});


//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);
