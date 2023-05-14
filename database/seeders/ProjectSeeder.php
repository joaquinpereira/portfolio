<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1)->first();

        $user->projects()->create([
            'name' => 'Blog hecho en laravel',
            'excerpt' => 'Blog funcional construido en laravel en la que se aplica distintas tecnologías del framework',
            'description' => 'Blog funcional construido en laravel en la que se aplica distintas tecnologías del framework como por ejemplo: políticas, roles y permisos a la creación de posts con spattie, SPA con vue para la zona pública de los posts, sección administrativa para los roles y permisos, etc,',
            'banner' => 'https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        ]);

        $user->projects()->create([
            'name' => 'Movie Scraper',
            'excerpt' => 'Aplicación de información acerca de peliculas y series de tv consultando la api de tmdb, hecho en laravel.',
            'description' => 'Aplicación de información acerca de peliculas y series de tv consultando la api de tmdb, hecho en laravel, en la que se aplica, tailwind css, alpine, livewire, etc.',
            'banner' => 'https://i.imgur.com/CYXcXzE.png',
        ]);

        $user->projects()->create([
            'name' => 'Red Social',
            'excerpt' => 'Aplicación de una red social realizada en laravel.',
            'description' => 'Aplicación de una red social realizada en laravel en la que se aplica el desarrolo guiado con pruebas(TDD) usando laravel dusk, se impementa websockets para una actulizacion de estados y notificaciones en tiempo real usando laravel echo, laravel websockets, etc.',
            'banner' => 'https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80',
        ]);

        $user->projects()->create([
            'name' => 'Chat simple',
            'excerpt' => 'Aplicación de un chat realizado en laravel.',
            'description' => 'Aplicación de un chat realizado en laravel se usa websockets usando laravel echo, laravel websockets, etc., esta aplicación es una prueba de conceptos del uso de websockets en laravel.',
            'banner' => 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80',
        ]);
    }
}
