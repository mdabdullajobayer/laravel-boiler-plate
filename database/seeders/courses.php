<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\courses;

class courses extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'Producct 01',
            'Producct 02',
            'Producct 03',
            'Producct 04',
            'Producct 05',
            'Producct 06',
            'Producct 07',
            'Producct 08',
            'Producct 09',
            'Producct 10',
            'Producct 11',
        ];

        // Looping and Inserting Array's Permissions into Permission Table
        foreach ($permissions as $permission) {
            courses::create(['name' => $permission]);
        }
    }
}
