<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Department::insert([
            'Department_Name'=>'Biology',
            'faculty_id'=>1
        ]);
        \App\Department::insert([
            'Department_Name'=>'Chemistry',
            'faculty_id'=>1
        ]);
        \App\Department::insert([
            'Department_Name'=>'Computer Science',
            'faculty_id'=>1
        ]);
        \App\Department::insert([
            'Department_Name'=>'Environmental Science',
            'faculty_id'=>1
        ]);
        \App\Department::insert([
            'Department_Name'=>'Mathematics',
            'faculty_id'=>1
        ]);
        \App\Department::insert([
            'Department_Name'=>'Physics',
            'faculty_id'=>1
        ]);

        \App\Department::insert([
            'Department_Name'=>'Geography',
            'faculty_id'=>2
        ]);
        \App\Department::insert([
            'Department_Name'=>'History',
            'faculty_id'=>2
        ]);
        \App\Department::insert([
            'Department_Name'=>'Khmer Literature',
            'faculty_id'=>2
        ]);
        \App\Department::insert([
            'Department_Name'=>'Linguistics',
            'faculty_id'=>2
        ]);
        \App\Department::insert([
            'Department_Name'=>'Media and Communication',
            'faculty_id'=>2
        ]);
        \App\Department::insert([
            'Department_Name'=>'Philosophy',
            'faculty_id'=>2
        ]);
        \App\Department::insert([
            'Department_Name'=>'Psychology',
            'faculty_id'=>2
        ]);
        \App\Department::insert([
            'Department_Name'=>'Sociology',
            'faculty_id'=>2
        ]);
        \App\Department::insert([
            'Department_Name'=>'Social Work',
            'faculty_id'=>2
        ]);
        \App\Department::insert([
            'Department_Name'=>'Tourism',
            'faculty_id'=>2
        ]);

        \App\Department::insert([
            'Department_Name'=>'Information Technology Engineering',
            'faculty_id'=>3
        ]);
        \App\Department::insert([
            'Department_Name'=>'Telecommunication and Electronic Engineering',
            'faculty_id'=>3
        ]);
        \App\Department::insert([
            'Department_Name'=>'Bioengineering',
            'faculty_id'=>3
        ]);

        \App\Department::insert([
            'Department_Name'=>'Community Development',
            'faculty_id'=>4
        ]);
        \App\Department::insert([
            'Department_Name'=>'Economic Development',
            'faculty_id'=>4
        ]);
        \App\Department::insert([
            'Department_Name'=>'Natural Resource Management and Development',
            'faculty_id'=>4
        ]);

        \App\Department::insert([
            'Department_Name'=>'Educational Studies',
            'faculty_id'=>5
        ]);
        \App\Department::insert([
            'Department_Name'=>'Higher Education Development and Management',
            'faculty_id'=>5
        ]);
        \App\Department::insert([
            'Department_Name'=>'Lifelong Learning',
            'faculty_id'=>5
        ]);
        \App\Department::insert([
            'Department_Name'=>'Center for Educational Research and Training',
            'faculty_id'=>5
        ]);
    }
}
