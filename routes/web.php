<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
   
Route::get('/', function () {   
    return "Welcome here is Product list <a href='" . route('products.index') . "'> Go to Products</a>";
});
 
   
Route::get('/products', [ProductController::class, 'show'])->name('products.index');  
Route::get('/products/add', [ProductController::class, 'add'])->name('products.add');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
