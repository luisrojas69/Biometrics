<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'abhinavmathur',
            'password' => bcrypt('abhinav'),
            'role' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('users')->insert([
            'username' => 'aanandvardhan',
            'password' => bcrypt('aanand'),
            'role' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('users')->insert([
            'username' => 'abhayabraham',
            'password' => bcrypt('abhay'),
            'role' => 'faculty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('users')->insert([
            'username' => 'aashishsharma',
            'password' => bcrypt('aashish'),
            'role' => 'faculty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
