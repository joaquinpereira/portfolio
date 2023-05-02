<?php

namespace Database\Seeders;

use App\Models\Reference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reference::factory()->create([
            'name' => 'Bladimir Malave',
            'position' => 'Gerente de proyecto y desarrollo',
            'telf' => '+582392126441',
        ]);

        Reference::factory()->create([
            'name' => 'Yamil Orozco',
            'position' => 'Jefe de oficina de Desarrollo.',
            'telf' => '+584269887737',
        ]);

        Reference::factory()->create([
            'name' => 'Victor Liendo',
            'position' => 'Jefe de Análisis de Sistemas.',
            'telf' => '+584162172501',
        ]);

        Reference::factory()->create([
            'name' => 'Alexander Bastidas',
            'position' => 'FullStack',
            'telf' => '+584123385686',
        ]);
    }
}
