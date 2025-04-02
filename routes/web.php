<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;

Route::get('auth/login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::get('auth/register', [AuthController::class, 'showRegister'])->name('auth.register');

Route::post('auth/login', [AuthController::class, 'handleLogin'])->name('auth.handleLogin');
Route::post('auth/register', [AuthController::class, 'handleRegister'])->name('auth.handleRegister');

 Route::resource('students', StudentController::class);
?>