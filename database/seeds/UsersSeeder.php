<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'name' => 'Shree Gopal',
            'email' => 'lmcity.ward3@gmail.com',
            'password' => bcrypt('shree123'),
        ]);
    }
}
