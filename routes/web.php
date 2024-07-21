<?php

use App\Models\Patient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RegisterController;

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/register', 'store')->name('register.store');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login','login')->name('login');
});

Route::middleware('auth')->group(function () {
    Route::resource('patients', PatientController::class);
});

Route::post('logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

