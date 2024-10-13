<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\CategoryController;




Route::get('/', [GamesController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);