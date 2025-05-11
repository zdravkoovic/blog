<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('post')->group(function () {
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::controller(PostController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/{id}', 'show');
            Route::post('/', 'store');
            Route::post('/comment', 'comment');
            Route::post('/like', 'like');
        });
    });
});