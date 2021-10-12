<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FilmController;
use App\Http\Controllers\Api\CategoryController;

Route::resource('films', FilmController::class);
Route::resource('categories', CategoryController::class);