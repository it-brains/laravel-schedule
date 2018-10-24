<?php

namespace ITBrains\LaravelSchedule;

use Illuminate\Console\Scheduling\Event;

class Schedule extends \Illuminate\Console\Scheduling\Schedule
{
    /**
     * Add a new command event to the schedule.
     *
     * @param  string  $command
     * @param  array  $parameters
     * @return \Illuminate\Console\Scheduling\Event
     */
    public function exec($command, array $parameters = [])
    {
        if (count($parameters)) {
            $command .= ' '.$this->compileParameters($parameters);
        }

        $this->events[] = $event = new Event($this->eventMutex, $command);

        if ($timezone = config('laravel-schedule.timezone')) {
            $event->timezone($timezone);
        }

        return $event;
    }
}
