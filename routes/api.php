<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (){
    require __DIR__.'/api/auth.php';
    require __DIR__.'/api/post.php';
});

Route::get('/', function (){
    return response()->json([
        "message" => 'Welcome to the Laravel API'
    ]);
});