<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (){
    require __DIR__.'/api/auth.php';
    require __DIR__.'/api/post.php';
});

Route::get('/test-redis', function () {
    Redis::set('test_key', 'Hello from Redis!');
    $value = Redis::get('test_key');

    return "Value from Redis: $value";
});