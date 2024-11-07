<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use app\Services\GameService;
use app\Services\CompanyService;
use app\Services\CategoryService;
use app\Services\GamingPlatformService;

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

        $this->app->singleton(CategoryService::class, function ($app) {
            return new CategoryService();
        });

        $this->app->singleton(GamingPlatformService::class, function ($app) {
            return new GamingPlatformService();
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
