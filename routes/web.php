<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])
    ->name('index');

Route::get('posts/{post:slug}', [PostController::class, 'show'])
    ->name('show');

    // Register
Route::get('register', [RegisterController::class, 'create'])
    ->name('register')
    ->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])
    ->middleware('guest');

    // Login, Logout
Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('session', [SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');


