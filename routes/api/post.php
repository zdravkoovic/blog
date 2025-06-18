<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('posts')->group(function () {
    Route::middleware([])->group(function () {
        Route::controller(PostController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/tags', 'getAllTags');
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
            Route::get('/{id}', 'show');
            Route::post('/', 'store');
            Route::post('/comment', 'comment');
            Route::post('/like', 'like');
            Route::get('/comments/{id}', 'comments');
            Route::delete('/comments/{id}', 'deleteComment');
        });
    });
});

Route::prefix('manticore')->group(function () {
    Route::controller(PostController::class)->group(function () {
        Route::get('/autocomplete/{text}', 'autocomplete');
        Route::get('/search', 'blogs');
    });
    // Route::get('/{text}', function (string $text) {
        
    //     // $result = Post::search(json_encode(['title' => $text]), function (Builder $builder) {
    //     //     return $builder->percolateQuery(docs:true, docsJson:true);
    //     // })->get();
    // //    $autocomplete = Post::search($text.'* ^',function (Builder $builder) {
    // //         return $builder->autocomplete(['"','^'], true); // "" ^ * allow full-text operators; stats - Show statistics of keywords, default is 0
    // //     })->raw();

    //     // $recommends = Post::search('*'.$text.'*', function (Builder $builder) use ($text) {
    //     //     return $builder
    //     //         ->groupBy('title_attr')
    //     //         ->inWeightOrder('desc');
                
    //     // })->get()->pluck('title');

    //     // return $recommends;

        
    // });
});