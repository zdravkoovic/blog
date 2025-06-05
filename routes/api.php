<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (){
    require __DIR__.'/api/auth.php';
    require __DIR__.'/api/post.php';
    require __DIR__.'/api/user.php';
});
