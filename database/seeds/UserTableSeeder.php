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
        	'email' => 	'admin@shiyanlou.com',
        	'password' 	=> 	Hash::make('shiyanlou'),
        	'nickname'	=>	'admin',
        	'is_admin'	=>	1,

        	]);
    }
}
