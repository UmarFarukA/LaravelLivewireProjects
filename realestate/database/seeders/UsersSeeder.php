<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'phone' => '45864412',
                'photo' => 'admin.jpg',
                'address' => 'admin @ 123 Rd',
                'role' => 'admin',
                'status' => 'active'
            ],

            [
                'name' => 'agent',
                'username' => 'agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('agent123'),
                'phone' => '45864412',
                'photo' => 'agent.jpg',
                'address' => 'agent @ 123 Rd',
                'role' => 'agent',
                'status' => 'active'
            ],

            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user123'),
                'phone' => '45864412',
                'photo' => 'user.jpg',
                'address' => 'user @ 123 Rd',
                'role' => 'user',
                'status' => 'active'
            ]
        ]);
    }
}
