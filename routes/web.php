<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;



Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/welcome', [AuthController::class, 'welcome'])->name('welcome');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('home');
});




