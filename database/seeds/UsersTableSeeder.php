<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
       /*DB::table('users')->insert([
           'name'     => str_random(10),
           'email'    => str_random(10).'@gmail.com',
           'password' => bcrypt('123456')
       ]);*/

       DB::table('users')->insert([
            'name'     => 'lucas',
            'email'    => 'lucas@lucas.com',
            'password' => bcrypt('123456')
        ]);
    }
}
