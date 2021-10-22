<?php

use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'show'])->name('login');
Route::get('/auth/redirect', [AuthController::class, 'redirect'])->name('auth.google');
Route::get('/auth/callback', [AuthController::class, 'callback']);

Route::middleware(['auth'])->group(function() {
    Route::get('/', function() {
        return view('home');
    })->name('dashboard');

    Route::get('/placeholder', function() {
        return  'placeholder link';
    })->name('placeholder');

    Route::post('logout', [AuthController::class, 'destroy'])->name('logout');
});