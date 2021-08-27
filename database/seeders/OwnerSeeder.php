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
                'name' => 'owner1',
                'email' => 'owner@owner.com',
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
            [
                'name' => 'test4_owner',
                'email' => 'test4_owner@test.com',
                'password' => Hash::make('password12'),
                'created_at' => '2021/08/20 21:46:00',
            ],
            [
                'name' => 'test5_owner',
                'email' => 'test5_owner@test.com',
                'password' => Hash::make('password12'),
                'created_at' => '2021/08/20 21:46:00',
            ],
            [
                'name' => 'test6_owner',
                'email' => 'test6_owner@test.com',
                'password' => Hash::make('password12'),
                'created_at' => '2021/08/20 21:46:00',
            ],
            [
                'name' => 'test7_owner',
                'email' => 'test7_owner@test.com',
                'password' => Hash::make('password12'),
                'created_at' => '2021/08/20 21:46:00',
            ],
            [
                'name' => 'test8_owner',
                'email' => 'test8_owner@test.com',
                'password' => Hash::make('password12'),
                'created_at' => '2021/08/20 21:46:00',
            ],
            [
                'name' => 'test9_owner',
                'email' => 'test9_owner@test.com',
                'password' => Hash::make('password12'),
                'created_at' => '2021/08/20 21:46:00',
            ],
            [
                'name' => 'test10_owner',
                'email' => 'test10_owner@test.com',
                'password' => Hash::make('password12'),
                'created_at' => '2021/08/20 21:46:00',
            ],
            [
                'name' => 'test11_owner',
                'email' => 'test11_owner@test.com',
                'password' => Hash::make('password12'),
                'created_at' => '2021/08/20 21:46:00',
            ],
        ]);
    }
}
