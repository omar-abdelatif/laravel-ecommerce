<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            //! Admin
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456789'),
                'role' => 'admin',
                'status' => 'active'
            ],
            //! Vendor
            [
                'name' => 'Vendor Mero',
                'email' => 'vendor@gmail.com',
                'password' => bcrypt('123456789'),
                'role' => 'vendor',
                'status' => 'active'
            ],
            //! User
            [
                'name' => 'User Mero',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123456789'),
                'role' => 'user',
                'status' => 'active'
            ]
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
