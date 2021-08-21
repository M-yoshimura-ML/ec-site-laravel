<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test1',
                'email' => 'test1_owner@test.com',
                'password' => Hash::make('password12'),
                'created_at' => '2021/08/20 21:46:00',
            ],
            [
                'name' => 'test2_owner',
                'email' => 'test2_owner@test.com',
                'password' => Hash::make('password12'),
                'created_at' => '2021/08/20 21:46:00',
            ],
            [
                'name' => 'test3_owner',
                'email' => 'test3_owner@test.com',
                'password' => Hash::make('password12'),
                'created_at' => '2021/08/20 21:46:00',
            ],
        ]);
    }
}
