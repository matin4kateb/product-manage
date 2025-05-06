<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Artisan;

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote');

return function (Schedule $schedule) {
    $schedule->command('db:seed', ['--class' => 'SellerSeeder'])->everyMinute();
};