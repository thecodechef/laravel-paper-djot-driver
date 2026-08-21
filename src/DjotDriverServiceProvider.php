<?php

declare(strict_types=1);

namespace LaravelPaper\DjotDriver;

use Illuminate\Support\ServiceProvider;

class DjotDriverServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-paper-djot-driver.php', 'laravel-paper-djot-driver');

        $this->app->singleton(DjotDriver::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/laravel-paper-djot-driver.php' => config_path('laravel-paper-djot-driver.php'),
        ], ['laravel-paper-djot-driver', 'laravel-paper-djot-driver-config']);
    }
}
