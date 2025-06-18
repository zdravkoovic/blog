<?php

namespace App\Providers;

use App\Repositories\AuthRepository;
use App\Repositories\CommentRepository;
use App\Repositories\Interfaces\IAuthRepository;
use App\Repositories\Interfaces\ICommentRepository;
use App\Repositories\Interfaces\IUserRepository;
use App\Repositories\UserRepository;
use App\Repositories\Interfaces\IPostRepository;
use App\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $bindings = [
            IAuthRepository::class => AuthRepository::class,
            IUserRepository::class => UserRepository::class,
            IPostRepository::class => PostRepository::class,
            ICommentRepository::class => CommentRepository::class
        ];

        foreach ($bindings as $interface => $repository)
        {
            $this->app->bind($interface, $repository);
        }

        $this->app->singleton(\App\Services\LemmatizerService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
