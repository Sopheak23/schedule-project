<?php

use Illuminate\Database\Seeder;

class DayPartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('day_parts')->insert([
            array('name' => 'Morning'),
            array('name' => 'Noon'),
            array('name' => 'Evening'),
        ]);
    }
}
