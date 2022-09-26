<?php

namespace App\Console;

use App\Http\Controllers\AbsensiController;
use App\Models\Absensi;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $findNoCheckout = Absensi::where('keluar', null)->get();
            foreach ($findNoCheckout as $checkout) {
                $updateCheckOut = Absensi::findOrFail($checkout->id);
                $updateCheckOut->keluar = Carbon::now();
                $updateCheckOut->save();
            }
        })->dailyAt('13:38');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
