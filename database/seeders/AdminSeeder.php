<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
              'name' => 'test_admin',
              'email' => 'test_admin@test.com',
              'password' => Hash::make('password12'),
              'created_at' => '2021/08/20 21:46:00',
            ],
            [
              'name' => 'admin',
              'email' => 'admin@admin.com',
              'password' => Hash::make('password12'),
              'created_at' => '2021/08/20 21:46:00',
           ]
        ]);
    }
}
