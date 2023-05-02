<?php

namespace Database\Seeders;

use App\Models\Education;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::factory()->create([
            'title' => 'TSU en Informática.',
            'university' => 'Colegio Universitario Francisco de Miranda.',
            'start_date' => new Carbon('01-03-2008'),
            'end_date' => new Carbon('15-07-2011'),
        ]);

        Education::factory()->create([
            'title' => 'Ingeniera en Informática.',
            'university' => 'Colegio Universitario de Caracas.',
            'start_date' => new Carbon('15-02-2013'),
            'end_date' => new Carbon('15-07-2015'),
        ]);
    }
}
