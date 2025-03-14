<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
});
