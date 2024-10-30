<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GamingPlatformController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/games/create', [GamesController::class, 'create']);
Route::get('/games/dashboard', [GamesController::class, 'index']);
Route::post('/games', [GamesController::class, 'store']);

Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);

Route::get('/companies/create', [CompanyController::class, 'create']);
Route::post('/companies', [CompanyController::class, 'store']);

Route::get('/platforms/create', [GamingPlatformController::class, 'create']);
Route::post('/platforms', [GamingPlatformController::class, 'store']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
