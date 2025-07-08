<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('posts')->group(function () {
    Route::middleware([])->group(function () {
        Route::controller(PostController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/tags', 'getAllTags');
            Route::get('/search', 'blogs');
        });
    });
});

Route::prefix('categories')->group(function () {
    Route::middleware([])->group(function () {
        Route::controller(PostController::class)->group(function () {
            Route::get('/', 'getAllCategories');
        });
    });
});

Route::prefix('posts')->group(function () {
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::controller(PostController::class)->group(function () {
            Route::get('/savedBlogs', 'savedBlogsByUser');
            Route::post('/', 'store');
            Route::post('/comment', 'comment');
            Route::post('/like', 'like');
            Route::get('/comments/{id}', 'comments');
            Route::delete('/comments/{id}', 'deleteComment');
            Route::post('/toggle_saving/{id}', 'save1unsave');
            Route::get('/{id}', 'show');
        });
    });
});