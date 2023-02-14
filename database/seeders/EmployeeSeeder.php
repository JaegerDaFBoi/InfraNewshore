<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $employees = [
            [
                "name" => "Juan Pablo Reina",
                "position" => "Desarrollador UX",
            ],
            [
                "name" => "Juan Camilo Morales",
                "position" => "Aprendiz Sena",
            ],
            [
                "name" => "Mario Castillo",
                "position" => "QA Tester",
            ]
        ];

        foreach ($employees as $employee) {
            Employee::create([
                'employee_name' => $employee['name'],
                'employee_position' => $employee['position']
            ]);
        }
    }
}
