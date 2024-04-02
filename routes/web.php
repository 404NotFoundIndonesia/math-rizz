<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

Route::get('/', [PageController::class, 'welcome'])->name('root');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pathway', [PageController::class, 'pathway'])->name('pathway');
