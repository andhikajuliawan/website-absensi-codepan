<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_tasks')->insert([
            [
                'id' => 1,
                'nama' => 'belum'
            ],
            [
                'id' => 2,
                'nama' => 'proses'
            ],
            [
                'id' => 3,
                'nama' => 'selesai'
            ],
        ]);
    }
}
