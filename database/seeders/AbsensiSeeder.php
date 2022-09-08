<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('absensis')->insert([
            [
                'user_id' => 1,
                'status_id' => 2,
                'tanggal' => date("Y-m-d"),
                'masuk' => date("Y-m-d H:i:s"),
                'keluar' => date("Y-m-d H:i:s"),
                'evidence' => "Surat-Dokter.jpg",
                'detail' => "Lorem ipsum dolor sit amet, Lorem Ipsum is simply dummy text of the printing.",
                'validate' => false
            ]
        ]);
    }
}
