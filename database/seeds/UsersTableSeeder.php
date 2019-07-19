<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
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
            'name' => 'Ajuma Kalu',
            'email' => 'johnawam@gmail.com',
            'password' => bcrypt('secretadmin'),
            'profile_pic'=>'default.jpg',
            'type'=>'admin',
        ]);
    }
}
