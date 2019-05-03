<?php

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Faculty::insert([
            'Faculty_Name'=>'Faculty of Science'
        ]);
        \App\Faculty::insert([
            'Faculty_Name'=>'Faculty of Social Science and Humanities'
        ]);
        \App\Faculty::insert([
            'Faculty_Name'=>'Faculty of Engineering'
        ]);
        \App\Faculty::insert([
            'Faculty_Name'=>'Faculty of Development Studies'
        ]);
        \App\Faculty::insert([
            'Faculty_Name'=>'Faculty of Education'
        ]);
    }
}
