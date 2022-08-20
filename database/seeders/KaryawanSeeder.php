<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawans')->insert([
            [

                'user_id' => 2,
                'status_id' => 2,
                'nama_lengkap' => 'bambang',
                'nomor_hp' => 12345678,
                'alamat' => 'jl.surabaya',
                'divisi' => 'pengrajin',
            ]
        ]);
    }
}
