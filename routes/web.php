<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinktreeController;

Route::get('/', [LinktreeController::class, 'index']);
Route::get('/admin', [LinktreeController::class, 'admin']);

Route::prefix('api')->group(function () {
    Route::get('/load',             [LinktreeController::class, 'load']);
    Route::post('/auth',            [LinktreeController::class, 'auth']);
    Route::post('/logout',          [LinktreeController::class, 'logout']);
    Route::post('/save',            [LinktreeController::class, 'save']);
    Route::post('/upload',          [LinktreeController::class, 'upload']);
    Route::get('/youtube',          [LinktreeController::class, 'youtube']);
    Route::post('/change-password', [LinktreeController::class, 'changePassword']);
});
