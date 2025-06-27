<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employer = User::where('email', 'employer@example.com')->first();

        if ($employer) {
            Job::create([
                'title' => 'Frontend Developer',
                'description' => 'Build and maintain user interfaces.',
                'status' => 'open',
                'employer_id' => $employer->id,
            ]);

            Job::create([
                'title' => 'Backend Developer',
                'description' => 'Work on APIs and business logic.',
                'status' => 'open',
                'employer_id' => $employer->id,
            ]);
        }
    }
}
