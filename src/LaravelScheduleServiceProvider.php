<?php

namespace ITBrains\LaravelSchedule;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application as LaravelApplication;

class LaravelScheduleServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->setupConfig($this->app);
    }

    /**
     * Setup the config.
     *
     * @param Container $app
     */
    protected function setupConfig(Container $app): void
    {
        $source = realpath($raw = __DIR__.'/../config/laravel-schedule.php') ?: $raw;

        if ($app instanceof LaravelApplication && $app->runningInConsole()) {
            $this->publishes([$source => config_path('laravel-schedule.php')]);
        }

        $this->mergeConfigFrom($source, 'laravel-schedule');
    }
}
