<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmpPresenceSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $employeeIds = DB::table('employee')->pluck('id');

        foreach ($employeeIds as $employeeId) {
            DB::table('emp_presence')->insert([
                'employee_id' => $employeeId,
                'check_in' => $faker->dateTimeBetween('08:00:00', '09:00:00'),
                'check_out' => $faker->dateTimeBetween('16:00:00', '18:00:00'),
                'late_in' => $faker->numberBetween(0, 1800), // Up to 30 minutes late
                'early_out' => $faker->numberBetween(0, 1800), // Up to 30 minutes early
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
