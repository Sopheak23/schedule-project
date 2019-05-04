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
            'faculty_name'=>'Faculty of Science'
        ]);
        \App\Faculty::insert([
            'faculty_name'=>'Faculty of Social Science and Humanities'
        ]);
        \App\Faculty::insert([
            'faculty_name'=>'Faculty of Engineering'
        ]);
        \App\Faculty::insert([
            'faculty_name'=>'Faculty of Development Studies'
        ]);
        \App\Faculty::insert([
            'faculty_name'=>'Faculty of Education'
        ]);
    }
}
