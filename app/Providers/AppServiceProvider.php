<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use app\Services\GameService;
use app\Services\CompanyService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(GameService::class, function ($app) {
            return new GameService();
        });

        $this->app->singleton(CompanyService::class, function ($app) {
            return new CompanyService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
