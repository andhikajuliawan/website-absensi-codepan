<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'user_id' => 1,
                'status_id' => 1,
                'name' => 'kerjakan desain',
                'detail' => 'desain untuk lomba',
            ],

        ]);
    }
}
