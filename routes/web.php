<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Public routes
Route::get('/', function () {
    return view('welcome'); // or your landing page
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.attempt');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard routes (role-based)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
});

Route::middleware(['auth', 'role:manager'])->group(function () {
    Route::get('/manager/dashboard', fn() => view('manager.dashboard'))->name('manager.dashboard');
});

// allow both admin and manager to access this route if needed: role:admin,manager
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', fn() => view('user.dashboard'))->name('user.dashboard');
});
