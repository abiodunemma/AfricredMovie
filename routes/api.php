<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::middleware('auth:api')->group(function () {
//     Route::post('/movies', [MovieController::class, 'store']);
//     // Other protected routes...
// });

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);


// Route::post('/movies', [MovieController::class, 'store']);
