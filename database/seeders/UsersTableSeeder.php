<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'AWESAdmin',
                'username' => 'awesadmin',
                'email' => 'awes.manila@gmail.com',
                'password' => Hash::make('0000'),
                'role' => 'admin',
                'status' => 'active',
            ],
            //User
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('0000'),
                'role' => 'user',
                'status' => 'active',
            ],

        ]);
    }
}
