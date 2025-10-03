<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/sign_up', function () {
    return view('auth.sign_up');
})->name('sign_up');
Route::get('/forgetPassword', function () {
    return view('auth.forgetPassword');
})->name('forgetPassword');