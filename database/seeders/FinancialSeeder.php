<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinancialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('financials')->insert([[
            'user_id' => 1,
            'name' => 'bayar listrik',
            'detail' => 'pembayaran listrik untuk bulan agustus',
            'pemasukan' => 12000,
            'pengeluaran' => 0,
            'tanggal' => date('y-m-d'),
        ]]);
    }
}
