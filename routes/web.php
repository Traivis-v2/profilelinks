<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinktreeController;

// Public page
Route::get('/', [LinktreeController::class, 'index']);

// Admin page
Route::get('/admin', [LinktreeController::class, 'admin']);

// API routes
Route::prefix('api')->group(function () {
    Route::get('/load',            [LinktreeController::class, 'load']);
    Route::post('/auth',           [LinktreeController::class, 'auth']);
    Route::post('/logout',         [LinktreeController::class, 'logout']);
    Route::post('/save',           [LinktreeController::class, 'save']);
    Route::get('/youtube',         [LinktreeController::class, 'youtube']);
    Route::post('/change-password',[LinktreeController::class, 'changePassword']);
});
