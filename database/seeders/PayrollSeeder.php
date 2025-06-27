<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payroll;
use App\Models\User;

class PayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employer = User::where('email', 'employer@example.com')->first();
        $employee = User::where('email', 'nila@gmail.com')->first();

        if ($employer && $employee) {
            Payroll::create([
                'user_id' => $employee->id,
                'employer_id' => $employer->id,
                'amount' => 250000,
                'month' => '2025-06',
                'status' => 'paid',
            ]);
        }
    }
}
