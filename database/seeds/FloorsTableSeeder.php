<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FloorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('floors')->insert([
            [
                'name' => 'floor 1',
                'building_id' => '1',
            ],
            [
                'name' => 'floor 2',
                'building_id' => '1'
            ]
        ]);
    }
}
