<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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




Route::middleware('auth:sanctum')->group(function () {
    // This route will be accessible only by authenticated users via Sanctum
    Route::get('/user', function (Request $request) {
        return $request->user();
    });


    Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);

    //Route::apiResource('posts', \App\Http\Controllers\Api\PostController::class);



    Route::apiResource('product-brands', \App\Http\Controllers\Api\ProductBrandController::class);
    Route::apiResource('product-categories', \App\Http\Controllers\Api\ProductCategoryController::class);
    Route::apiResource('products', \App\Http\Controllers\Api\ProductController::class);

});



// API routes for posts
//Route::get('posts', [\App\Http\Controllers\Api\PostController::class, 'index'])->name('posts.index');
//Route::get('posts/{post}', [\App\Http\Controllers\Api\PostController::class, 'show'])->name('posts.show');


// API routes for users
Route::get('users', [\App\Http\Controllers\Api\UserController::class, 'index'])->name('users.index');
Route::get('users/{user}', [\App\Http\Controllers\Api\UserController::class, 'show'])->name('users.show');


Route::get('users', [\App\Http\Controllers\Api\UserController::class, 'index'])->name('users.index');
Route::get('users/{user}', [\App\Http\Controllers\Api\UserController::class, 'show'])->name('users.show');

Route::get('product-brands', [\App\Http\Controllers\Api\ProductBrandController::class, 'index'])->name('product-brands.index');
Route::get('product-brands/{product_brand}', [\App\Http\Controllers\Api\ProductBrandController::class, 'show'])->name('product-brands.show');

Route::get('product-categories', [\App\Http\Controllers\Api\ProductCategoryController::class, 'index'])->name('product-categories.index');
Route::get('product-categories/{product_category}', [\App\Http\Controllers\Api\ProductCategoryController::class, 'show'])->name('product-categories.show');

Route::get('products', [\App\Http\Controllers\Api\ProductController::class, 'index'])->name('products.index');
Route::get('products/{product}', [\App\Http\Controllers\Api\ProductController::class, 'show'])->name('products.show');


