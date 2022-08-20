<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_users')->insert([
            [
                'nama' => 'admin'
            ],
            [
                'nama' => 'karyawan'
            ],
        ]);
    }
}
