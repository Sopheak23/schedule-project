<?php

use Illuminate\Database\Seeder;

class TestTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_times')->insert([
            array('morning' => '07:00:00','afternoon' => '13:00:00','evening' => '18:00:00'),
            array('morning' => '08:00:00','afternoon' => '14:00:00','evening' => '19:00:00'),
            array('morning' => '09:00:00','afternoon' => '15:00:00','evening' => '20:00:00'),
            array('morning' => '10:00:00','afternoon' => '16:00:00','evening' => '21:00:00'),
            array('morning' => '11:00:00','afternoon' => '17:00:00','evening' => '22:00:00'),

        ]);

    }
}
