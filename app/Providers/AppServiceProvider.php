<?php

namespace App\Providers;

use App\Interfaces\TodoInterface;
use App\Repositories\TodoRepository;
use App\Singletons\Logger;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TodoInterface::class, TodoRepository::class);
        $this->app->singleton(Logger::class, fn() => new Logger());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
