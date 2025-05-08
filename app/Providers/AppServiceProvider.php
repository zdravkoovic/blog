<?php

namespace App\Providers;

use App\Repositories\AuthRepository;
use App\Repositories\Interfaces\IAuthRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $bindings = [
            IAuthRepository::class => AuthRepository::class
        ];

        foreach ($bindings as $interface => $repository)
        {
            $this->app->bind($interface, $repository);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
