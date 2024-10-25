<?php

namespace Database\Seeders;

use App\Models\Profesor;
use App\Models\ProfesorMateria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesorMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfesorMateria::factory()->count(10)->create();
    }
}
