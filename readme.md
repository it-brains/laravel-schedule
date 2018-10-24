# LaravelSchedule

## Installation

Via Composer

``` bash
$ composer require it-brains/laravel-schedule
```

## Usage

Change ```Kernel``` in ```App\Console``` directory

```php
//use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use ITBrains\LaravelSchedule\Kernel as ConsoleKernel;
```

Set timezone to ```.env```

```dotenv
SCHEDULE_TIMEZONE=
```
