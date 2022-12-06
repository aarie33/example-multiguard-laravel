<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::truncate();
        Employee::create([
            'name'      => 'Employee 1',
            'email'     => 'employee1@test.com',
            'password'  => bcrypt('password'),
        ]);
    }
}
