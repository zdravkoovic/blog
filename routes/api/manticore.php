<?php

use App\Http\Controllers\ManticoreController;

Route::prefix('manticore')->group(function () {
    Route::controller(ManticoreController::class)->group(function () {
        Route::get('/autocomplete', 'autocomplete');
    });
});