<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'lname' =>'Software',
            'fname' =>'DO',
            'email' => 'dosofware@gmail.com',
            'rol'	=> 'Admin',
            'password' => bcrypt('admin'),
        ]);
    }
}
