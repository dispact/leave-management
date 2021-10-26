<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\ApprovalController;

Route::get('login', [AuthController::class, 'show'])->name('login');
Route::get('/auth/redirect', [AuthController::class, 'redirect'])->name('auth.google');
Route::get('/auth/callback', [AuthController::class, 'callback']);

Route::middleware(['auth'])->group(function() {
    Route::get('/', function() {
        return view('home');
    })->name('dashboard');

    Route::middleware(['permission:leave.read'])
        ->get('/leaves', [LeaveController::class, 'index'])
        ->name('leave.index');

    Route::get('/settings', function() {
        return view('settings');
    })->name('settings');

    Route::get('/placeholder', function() {
        return  'placeholder link';
    })->name('placeholder');

    Route::middleware(['permission:approval.read'])->group(function() {
        Route::get('/approvals', [ApprovalController::class, 'index'])->name('approval.index');
    });

    Route::post('logout', [AuthController::class, 'destroy'])->name('logout');
});