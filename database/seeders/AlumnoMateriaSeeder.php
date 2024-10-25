<?php

namespace Database\Seeders;

use App\Models\AlumnoMateria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlumnoMateria::factory()->count(50)->create();
    }
}
