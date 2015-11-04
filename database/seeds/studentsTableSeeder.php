<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class studentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Abhinav Mathur',
            'rollno' => '14CSU009',
            'key' => '12345',
            'sem' => 'III',
            'branch' => 'CSE',
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('students')->insert([
            'name' => 'Aanand Vardhan',
            'rollno' => '14CSU004',
            'key' => '67890',
            'sem' => 'IV',
            'branch' => 'ECE',
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('students')->insert([
            'name' => 'Abhay Abraham',
            'rollno' => '14CSU008',
            'key' => '54321',
            'sem' => 'II',
            'branch' => 'ME',
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('students')->insert([
            'name' => 'Aashish Sharma',
            'rollno' => '14CSU005',
            'key' => '09876',
            'sem' => 'VI',
            'branch' => 'CIVIL',
            'created_at' => Carbon::now(),
        ]);
    }
}
