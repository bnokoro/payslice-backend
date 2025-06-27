<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

    
        User::create([
            'name' => 'Employee A',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        User::factory()->create([
           'name' => 'Test User',
           'email' => 'test@example.com',
]);


        User::create([
        'name' => 'Nila',
        'email' => 'nila@gmail.com',
        'password' => bcrypt('password'),
        'role' => 'user',
]);

        User::create([
       'name' => 'Employer',
       'email' => 'employer@example.com',
       'password' => bcrypt('password'),
       'role' => 'employer',
]);

    }
}
