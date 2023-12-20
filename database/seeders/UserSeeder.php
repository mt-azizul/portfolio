<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@email.com',],
            [
                'first_name' => 'Admin',
                'last_name' => 'One',
                'username' => 'admin',
                'role' => 'admin',
                'email' => 'admin@email.com',
                'password' => '123456',
            ]
        );
    }
}
