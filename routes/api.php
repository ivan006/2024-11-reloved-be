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


    Route::apiResource('brands', \App\Http\Controllers\Api\BrandController::class);

    Route::apiResource('categories', \App\Http\Controllers\Api\CategoryController::class);

    Route::apiResource('genders', \App\Http\Controllers\Api\GenderController::class);

    Route::apiResource('products', \App\Http\Controllers\Api\ProductController::class);

});



// API routes for posts
//Route::get('posts', [\App\Http\Controllers\Api\PostController::class, 'index'])->name('posts.index');
//Route::get('posts/{post}', [\App\Http\Controllers\Api\PostController::class, 'show'])->name('posts.show');


// API routes for users
Route::get('users', [\App\Http\Controllers\Api\UserController::class, 'index'])->name('users.index');
Route::get('users/{user}', [\App\Http\Controllers\Api\UserController::class, 'show'])->name('users.show');


Route::get('brands', [\App\Http\Controllers\Api\BrandController::class, 'index'])->name('brands.index');
Route::get('brands/{brand}', [\App\Http\Controllers\Api\BrandController::class, 'show'])->name('brands.show');

Route::get('categories', [\App\Http\Controllers\Api\CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/{category}', [\App\Http\Controllers\Api\CategoryController::class, 'show'])->name('categories.show');

Route::get('genders', [\App\Http\Controllers\Api\GenderController::class, 'index'])->name('genders.index');
Route::get('genders/{gender}', [\App\Http\Controllers\Api\GenderController::class, 'show'])->name('genders.show');

Route::get('products', [\App\Http\Controllers\Api\ProductController::class, 'index'])->name('products.index');
Route::get('products/{product}', [\App\Http\Controllers\Api\ProductController::class, 'show'])->name('products.show');
