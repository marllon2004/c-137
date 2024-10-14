<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;




Route::get('/', [GamesController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::get('/companies/create', [CompanyController::class, 'create']);