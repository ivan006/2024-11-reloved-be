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



});



// API routes for posts
//Route::get('posts', [\App\Http\Controllers\Api\PostController::class, 'index'])->name('posts.index');
//Route::get('posts/{post}', [\App\Http\Controllers\Api\PostController::class, 'show'])->name('posts.show');


// API routes for users
Route::get('users', [\App\Http\Controllers\Api\UserController::class, 'index'])->name('users.index');
Route::get('users/{user}', [\App\Http\Controllers\Api\UserController::class, 'show'])->name('users.show');

// API routes for failed-jobs
Route::apiResource('failed-jobs', \App\Http\Controllers\Api\FailedJobController::class);
// API routes for migration-s
Route::apiResource('migration-s', \App\Http\Controllers\Api\MigrationController::class);
// API routes for password-reset-tokens
Route::apiResource('password-reset-tokens', \App\Http\Controllers\Api\PasswordResetTokenController::class);
// API routes for personal-access-tokens
Route::apiResource('personal-access-tokens', \App\Http\Controllers\Api\PersonalAccessTokenController::class);
// API routes for users
Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);