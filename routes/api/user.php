<?php

use App\Http\Controllers\UserController;

Route::prefix('/users')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/', 'getAll');
        Route::get('/{id}', 'findById');
    });
});