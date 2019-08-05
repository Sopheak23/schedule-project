<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([
            'time' => '07:00',
        ]);
        DB::table('times')->insert([
            'time' => '08:00'
        ]);
        DB::table('times')->insert([
            'time' => '09:00'
        ]);
        DB::table('times')->insert([
            'time' => '10:00'
        ]);
        DB::table('times')->insert([
            'time' => '11:00',
        ]);
        DB::table('times')->insert([
            'time' => '12:00'
        ]);
        DB::table('times')->insert([
            'time' => '13:00'
        ]);
        DB::table('times')->insert([
            'time' => '14:00'
        ]);
        DB::table('times')->insert([
            'time' => '15:00',
        ]);
        DB::table('times')->insert([
            'time' => '16:00'
        ]);
        DB::table('times')->insert([
            'time' => '17:00'
        ]);
        DB::table('times')->insert([
            'time' => '18:00'
        ]);
        DB::table('times')->insert([
            'time' => '19:00'
        ]);
        DB::table('times')->insert([
            'time' => '20:00',
        ]);
        DB::table('times')->insert([
            'time' => '21:00'
        ]);
        DB::table('times')->insert([
            'time' => '22:00'
        ]);
    }
}
