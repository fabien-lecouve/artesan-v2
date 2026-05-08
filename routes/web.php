<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\EstimateStatusController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\InvoiceStatusController;
use App\Http\Controllers\ProjectStatusController;
use App\Http\Controllers\ProjectTypeController;
use App\Http\Controllers\UnitController;
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

Route::middleware('auth')->group(function () {

    Route::resource('categories', CategoryController::class);
    Route::resource('certificates', CertificateController::class)->middleware(['auth', 'can:viewAny,App\Models\Certificate']);
    Route::resource('estimate-statuses', EstimateStatusController::class);
    Route::resource('insurances', InsuranceController::class);
    Route::resource('invoice-statuses', InvoiceStatusController::class);
    Route::resource('project-statuses', ProjectStatusController::class);
    Route::resource('project-types', ProjectTypeController::class);
    Route::resource('units', UnitController::class);
     
});