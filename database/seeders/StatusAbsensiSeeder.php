<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusAbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_absensis')->insert([
            ['nama' => 'hadir'],
            ['nama' => 'izin'],
            ['nama' => 'sakit'],
            ['nama' => 'alfa'],
            ['nama' => 'cuti'],
        ]);
    }
}
