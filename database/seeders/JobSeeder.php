<?php

namespace Database\Seeders;

use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory()->create([
            'position' => 'Lider Técnico / FullStack developer.',
            'description' => 'Encargado de liderar a un equipo de desarrollo con talentos en el frontend y backend en el desarrollo de soluciones tecnológicas de alto calidad para clientes emprendedores. Trabaje principalmente con Laravel y angular.',
            'company' => 'CRONAPIS',
            'start_date' => new Carbon('01-06-2021'),
            'end_date' => new Carbon('15-02-2022'),
        ]);

        Job::factory()->create([
            'position' => 'FullStack developer.',
            'description' => 'Desarrollador encargado del mantenimiento y programación de plugins y características de un sitio web construido en un CMS de php llamado questions2answers.',
            'company' => 'Delstones Services.',
            'start_date' => new Carbon('01-08-2020'),
            'end_date' => new Carbon('15-06-2021'),
        ]);

        Job::factory()->create([
            'position' => 'Desarrollador Web y de aplicaciones mobiles.',
            'description' => 'Desarrollador web y de aplicaciones mobiles híbridas en distintos sistemas que pertenecían al catalogo de la empresa. Trabaje principalmente con el front de un sistema que solo contenia bootstrap y jquery, en el ambiente movil desarrolle con ionic 3 y 4.',
            'company' => 'Pause Producciones y Promociones, SLU.',
            'start_date' => new Carbon('01-08-2020'),
            'end_date' => new Carbon('15-09-2018'),
        ]);

        Job::factory()->create([
            'position' => 'Desarrollador Web y de aplicaciones mobiles.',
            'description' => 'Desarrollar soluciones y funcionalidades a los requerimiento surgidos de las distintas aplicaciones que maneja la empresa. Investigación y puesta a prueba de nuevas tecnologias para la solucion de distintos retos planteados en la empresa. Trabaje con Laravel, node, y angular.',
            'company' => 'Soluciones Tecnológicas de Venezuela C.A.',
            'start_date' => new Carbon('01-03-2017'),
            'end_date' => new Carbon('15-09-2018'),
        ]);

        Job::factory()->create([
            'position' => 'Desarrollador de Sistemas - Profesional III',
            'description' => 'Desarrollador de aplicaciones. integrante del grupo técnico encargado de la elaboración de la herramienta de software para la automatización de trámites del estado Venezolano. Trabaje con java, JSF2, Struts2, Primafeces, YII, angular, Spring, docker, linux, etc.',
            'company' => 'Centro Nacional de Tecnologías de la información.',
            'start_date' => new Carbon('01-03-2017'),
            'end_date' => new Carbon('15-09-2018'),
        ]);
    }
}
