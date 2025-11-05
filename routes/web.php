<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Show login form
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Process login
Route::post('/login', [AuthController::class, 'login']);

// Show register form
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

// Process registration
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard (protected route)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Redirect root to login
Route::get('/', function () {
    return redirect()->route('login');
});