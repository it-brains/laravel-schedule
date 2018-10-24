<?php

namespace ITBrains\LaravelSchedule;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

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
