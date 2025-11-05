<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Owner',
                'username' => 'owner',
                'email' => 'owner@monsmagna.com',
                'password' => Hash::make('owner123'),
                'role' => 'Owner',
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@monsmagna.com',
                'password' => Hash::make('admin123'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Produksi',
                'username' => 'produksi',
                'email' => 'produksi@monsmagna.com',
                'password' => Hash::make('produksi123'),
                'role' => 'Produksi',
            ],
            [
                'name' => 'Keuangan',
                'username' => 'keuangan',
                'email' => 'keuangan@monsmagna.com',
                'password' => Hash::make('keuangan123'),
                'role' => 'Keuangan',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}