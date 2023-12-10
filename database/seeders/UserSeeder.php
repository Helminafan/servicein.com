<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'telp' => '087908765437',
            'role' => 'admin',
            'password' => bcrypt('admin123'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'telp' => '087928755439',
            'role' => 'user',
            'password' => bcrypt('user123'),
        ]);
        $user->assignRole('user');

       
    }
}
