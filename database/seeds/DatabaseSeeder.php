<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FacultiesTableSeeder::class,
            DepartmentsTableSeeder::class,
            BuildingsTableSeeder::class,
            FloorsTableSeeder::class,
            RoomsTableSeeder::class,
            ProfessorsTableSeeder::class,
            DaysTableSeeder::class,
            TimesTableSeeder::class,
            ProfDeptTableSeeder::class,
            DayPartsTableSeeder::class,
            TestTimesTableSeeder::class
        ]);
    }
}
