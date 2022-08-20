<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [

                'user_id' => 1,
                'status_id' => 1,
                'nama_lengkap' => 'admin',
                'nomor_hp' => 12345678,
                'alamat' => 'jl.surabaya',
                'divisi' => 'pengrajin',
            ]
        ]);
    }
}
