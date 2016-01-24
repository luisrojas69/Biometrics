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
            'enid' => '14CSU009',
            'sem' => '3',
            'branch' => 'CSE',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('students')->insert([
            'name' => 'Aanand Vardhan',
            'enid' => '14CSU004',
            'sem' => '4',
            'branch' => 'ECE',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('students')->insert([
            'name' => 'Abhay Abraham',
            'enid' => '14CSU008',
            'sem' => '2',
            'branch' => 'ME',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('students')->insert([
            'name' => 'Aashish Sharma',
            'enid' => '14CSU005',
            'sem' => '6',
            'branch' => 'CIVIL',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
