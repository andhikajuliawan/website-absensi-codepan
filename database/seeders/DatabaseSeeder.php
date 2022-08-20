<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            LevelUserSeeder::class,
            UserSeeder::class,
            StatusPekerjaanSeeder::class,
            AdminSeeder::class,
            KaryawanSeeder::class,
            StatusTaskSeeder::class,
            TaskSeeder::class,
            StatusAbsensiSeeder::class,
            AbsensiSeeder::class,
            FinancialSeeder::class,
        ]);
    }
}
