<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipments = [
            [
                "name" => "Lenovo ThinkPad L14",
                "serial" => "PF456JT7",
                "cpu" => "Intel Core 1165G",
                "ram" => 16,
                "so" => "Windows 10 64 bits",
                "storagetype" => "SSD",
                "capacity" => 985,
                "is_assigned" => 1,
                "is_damaged" => 0,
                "employee" => 1
            ],
            [
                "name" => "Lenovo ThinkPad L14",
                "serial" => "PF32P12E",
                "cpu" => "Intel Core 1165G",
                "ram" => 16,
                "so" => "Windows 10 64 bits",
                "storagetype" => "SSD",
                "capacity" => 985,
                "is_assigned" => 0,
                "is_damaged" => 0,
                "employee" => null
            ],
            [
                "name" => "Lenovo ThinkPad T14",
                "serial" => "PC89Y6531",
                "cpu" => "Intel Core 1165G",
                "ram" => 16,
                "so" => "Windows 10 64 bits",
                "storagetype" => "SSD",
                "capacity" => 985,
                "is_assigned" => 0,
                "is_damaged" => 0,
                "employee" => null
            ],
        ];

        foreach ($equipments as $equipment) {
            Equipment::create([
                'model_name' => $equipment['name'],
                'serial' => $equipment['serial'],
                'processor' => $equipment['cpu'],
                'ram_memory' => $equipment['ram'],
                'operative_system' => $equipment['so'],
                'storage_disk_type' => $equipment['storagetype'],
                'storage_capacity' => $equipment['capacity'],
                'is_assigned' => $equipment['is_assigned'],
                'is_damaged' => $equipment['is_damaged'],
                'fk_employee_id' => $equipment['employee']
            ]);
        }
    }
}
