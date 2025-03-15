<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebPageController::class, 'home'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login-post');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register-post');

    Route::get('/google', [AuthController::class, 'redirectToGoogle'])->name('google-login');
    Route::get('/google/callback', [AuthController::class, 'handleGoogleCallback']);
});
