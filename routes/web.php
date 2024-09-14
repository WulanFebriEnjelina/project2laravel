<?php

use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route ::get('/auth/login',[LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');

