<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class EmpSalarySeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $employeeIds = DB::table('employee')->pluck('id');

        foreach ($employeeIds as $employeeId) {
            DB::table('emp_salary')->insert([
                'employee_id' => $employeeId,
                'month' => Carbon::now()->month,
                'year' => Carbon::now()->year,
                'basic_salary' => $faker->numberBetween(1000, 5000),
                'bonus' => $faker->numberBetween(0, 1000),
                'bpjs' => $faker->numberBetween(100, 500),
                'jp' => $faker->numberBetween(50, 250),
                'loan' => $faker->numberBetween(0, 1000),
                'total_salary' => $faker->numberBetween(1500, 7000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
