<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Room::insert([
            'name'=> '001',
            'building_id'=> rand(1,3),
            'total_students'=>rand(50,150),
            'floor_id'=>1
        ]);
        \App\Room::insert([
            'name'=> '002',
            'building_id'=> rand(1,3),
            'total_students'=>rand(50,150),
            'floor_id'=>1
        ]);
        \App\Room::insert([
            'name'=> '003',
            'building_id'=> rand(1,3),
            'total_students'=>rand(50,150),
            'floor_id'=>1
        ]);
        \App\Room::insert([
            'name'=>Str::random(3),
            'building_id'=> rand(1,3),
            'total_students'=>rand(50,150),
            'floor_id'=>2
        ]);
    }
}
