<?php

namespace App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use ITBrains\LaravelSchedule\Schedule;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @return void
     */
    protected function defineConsoleSchedule()
    {
        $this->app->singleton(Schedule::class, function ($app) {
            return new Schedule;
        });

        $schedule = $this->app->make(Schedule::class);

        $this->schedule($schedule);
    }
}
