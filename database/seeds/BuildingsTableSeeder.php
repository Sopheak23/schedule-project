<?php

use Illuminate\Database\Seeder;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Building::insert([
            'name'=>'Building A',
        ]);
        \App\Building::insert([
            'name'=>'Building B',
        ]);
        \App\Building::insert([
            'name'=>'Building C',
        ]);
    }
}
