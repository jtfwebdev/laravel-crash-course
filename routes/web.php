<?php

use App\Http\Controllers\Homepage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [Homepage::class, 'homepage']);

Route::get('/login', [UserController::class, 'loginPage']);
Route::get('/register', [UserController::class, 'registerPage']);

Route::post('/login', [UserController::class, 'loginUser']);
Route::post('/register', [UserController::class, 'registerUser']);
