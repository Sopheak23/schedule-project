<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Subject::insert([
            'subject_name'=>"General English III"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Advance Programming I"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Data Structure and Algorithm I	"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Data Communication I"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Mathematic III"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Probability and Statistics"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Circuit Theory I"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Critical Thinking & Personal Development"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Project Practicum"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Discrete Math"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Signal & System"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Database II"
        ]);
        \App\Subject::insert([
            'subject_name'=>"User Interface Design"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Network Engineering I"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Computer Graphic I"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Object Oriented Analysis and Design"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Operating System"
        ]);
        \App\Subject::insert([
            'subject_name'=>"Mobile Application Development I"
        ]);
    }
}
