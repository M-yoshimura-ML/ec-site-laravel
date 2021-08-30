<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
              'name' => 'user',
              'email' => 'user@user.com',
              'password' => Hash::make('password12'),
              'created_at' => '2021/08/20 21:46:00',
            ],
            [
              'name' => 'user2',
              'email' => 'user2@user2.com',
              'password' => Hash::make('password12'),
              'created_at' => '2021/08/20 21:46:00',
           ]
        ]);
    }
}
