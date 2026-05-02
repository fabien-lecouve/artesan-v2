<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\InsuranceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Registration routes
Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');

Route::post('/register', Register::class)
    ->middleware('guest');

// Login routes
Route::view('/login', 'auth.login')
    ->middleware('guest')
    ->name('login');

Route::post('/login', Login::class)
    ->middleware('guest');

// Logout route
Route::post('/logout', Logout::class)
    ->middleware('auth')
    ->name('logout');

// INSURANCE
Route::middleware('auth')->prefix('insurances')->group(function() {
    Route::get('/', [InsuranceController::class, 'index'])->name('insurances.index');

    Route::get('/create', [InsuranceController::class, 'create'])->name('insurances.create');
    Route::post('/create', [InsuranceController::class, 'store'])->name('insurances.store');

    Route::get('/show/{insurance}', [InsuranceController::class, 'show'])->name('insurances.show');

    Route::get('/edit/{insurance}', [InsuranceController::class, 'edit'])->name('insurances.edit');
    Route::put('/edit/{insurance}', [InsuranceController::class, 'update'])->name('insurances.update');
    
    Route::delete('/delete/{insurance}', [InsuranceController::class, 'destroy'])->name('insurances.destroy');
});