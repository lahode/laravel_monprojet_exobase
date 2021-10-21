<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FilmController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\AuthenticationController;

// Register new user
Route::post('/create-account', [AuthenticationController::class, 'createAccount']);

// Login user
Route::post('/signin', [AuthenticationController::class, 'signin']);

// Add sanctum middleware to protect our routes.
Route::middleware('auth:sanctum')->group(function () {
  Route::resource('films', FilmController::class);
  Route::resource('categories', CategoryController::class);
  Route::post('/sign-out', [AuthenticationController::class, 'logout']);
});

// Add login route because Laravel needs it (Or add Accept: application/json to all requests),
Route::get('/login', function () {
  return response()->json([
    'status_code' => 400,
    'message' => 'error'
  ]);
})->name('login');
