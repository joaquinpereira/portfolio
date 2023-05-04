<?php

namespace Database\Seeders;

use App\Models\Technology;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1)->first();

        $this->create_technologies($user);
    }

    private function create_technologies($user)
    {
        //php
        $tech = Technology::factory()->create([
            'name' => 'PHP',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<i class="fa-brands fa-php"></i>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '80']
        ]);

        //laravel
        $tech = Technology::factory()->create([
            'name' => 'Laravel',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<i class="fa-brands fa-laravel"></i>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '75']
        ]);

        //yii
        $tech = Technology::factory()->create([
            'name' => 'YII',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<svg class="currentColorText" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="50" height="50"
            viewBox="0 0 50 50">
            <path d="M 39.720703 2.9921875 L 39.46875 3 C 36.963626 3.0906231 34.419549 4.3936334 32.4375 6.3125 C 30.455451 8.2313666 29.011418 10.818076 29 13.621094 C 28.997848 14.189705 29.041083 14.817135 29.164062 15.453125 C 28.998576 15.226902 28.837473 14.989734 28.669922 14.769531 C 24.543215 9.3455603 17.973626 6 11.5 6 C 9.2397843 6 6.9124409 6.4570779 4.6777344 7.3320312 L 4.0957031 7.5605469 L 4.046875 8.1816406 C 4.0154907 8.5701565 4 8.9695031 4 9.375 C 4.0016 11.962498 4.6396758 14.966123 6.3652344 17.644531 C 8.090793 20.32294 10.926332 22.644034 15.136719 23.78125 C 18.770049 24.845328 21.296453 25.475531 23.974609 26.460938 C 24.507997 26.657083 25.011375 26.868338 25.501953 27.087891 C 24.831738 28.225254 23.995098 29.45012 22.927734 30.791016 L 22.925781 30.792969 L 22.923828 30.796875 C 20.47781 33.910941 18.024041 38.73023 18.001953 44.496094 C 17.998753 45.352868 18.048473 46.230615 18.162109 47.125 L 18.285156 48.101562 L 19.265625 47.992188 C 25.043372 47.348824 28.957065 44.788756 31.396484 41.769531 C 33.815303 38.775805 34.811951 35.387773 34.990234 32.876953 L 35 32.876953 L 35 32.777344 L 35 32.423828 C 40.417388 27.230624 45.577882 21.658486 45.994141 14.767578 L 45.994141 14.75 L 45.994141 14.732422 C 46.132419 9.0874624 43.388815 4.7998137 39.947266 3.1035156 L 39.720703 2.9921875 z M 39.296875 5.0664062 C 41.804225 6.4421073 44.102726 9.8555766 43.994141 14.65625 C 43.661113 20.095598 39.663782 24.959596 34.896484 29.679688 C 34.765894 28.191572 34.50979 26.775313 34.148438 25.429688 C 33.102193 20.090446 31.292969 15.728516 31.292969 15.728516 L 31.314453 15.779297 C 31.08304 15.149591 30.997274 14.354998 31 13.628906 C 31.0086 11.521924 32.147674 9.3749303 33.828125 7.7480469 C 35.43816 6.1893347 37.511229 5.2087572 39.296875 5.0664062 z M 11.5 8 C 17.276374 8 23.336785 11.06044 27.080078 15.980469 C 29.896484 19.681908 32.235086 24.152294 32.775391 29.666016 C 30.209686 27.434358 27.762798 25.723497 24.664062 24.583984 C 21.858132 23.551566 19.289407 22.913113 15.679688 21.855469 L 15.669922 21.851562 L 15.658203 21.849609 C 11.882624 20.829865 9.5230664 18.851888 8.046875 16.560547 C 6.5706836 14.269206 6.0013975 11.631502 6 9.375 C 6 9.2507633 6.0104665 9.1369763 6.0136719 9.015625 C 7.8405351 8.3735704 9.7074846 8 11.5 8 z M 27.289062 27.992188 C 29.220486 29.087785 30.970945 30.490367 33 32.425781 L 33 32.6875 C 32.860293 34.787366 31.976615 37.869493 29.841797 40.511719 C 27.857578 42.967549 24.749646 45.031231 20.080078 45.794922 C 20.051538 45.36369 20.000403 44.925248 20.001953 44.503906 C 20.021853 39.30873 22.267447 34.871258 24.492188 32.037109 L 24.496094 32.03125 C 25.644826 30.587595 26.555176 29.250652 27.289062 27.992188 z" clip-rule="evenodd" fill="currentColor"></path>
            </svg>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '40']
        ]);

        //postgresql
        $tech = Technology::factory()->create([
            'name' => 'Postgresql',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<svg class="currentColorText" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="50" height="50"
            viewBox="0 0 50 50">
            <path d="M 34.902344 2 C 32.863281 2 31.097656 2.550781 29.875 3.09375 C 28.675781 2.691406 26.6875 2.003906 24.300781 2.5 C 22.910156 2.742188 21.632813 3.316406 20.460938 4.195313 C 18.53125 3.265625 16.515625 2.695313 14.402344 2.601563 C 13.101563 2.5 7.800781 3.101563 5.898438 5.898438 C 5.199219 7 4.5 8.398438 4.199219 10.097656 C 3.898438 11.597656 3.898438 13.300781 4.398438 16.800781 C 4.699219 19.199219 5.101563 20.800781 6 24.097656 C 6.101563 24.398438 6.601563 26 8.101563 30.402344 C 8.398438 31.199219 9 32.699219 10.199219 34.097656 C 11 35.097656 11.800781 35.699219 12.800781 35.699219 C 14.101563 35.699219 15 34.800781 15.800781 33.800781 C 15.859375 33.734375 15.921875 33.660156 15.980469 33.59375 C 15.90625 33.710938 15.839844 33.839844 15.800781 34 C 15.601563 35 16.800781 35.800781 17.800781 36.199219 C 18.601563 36.597656 19.5 36.699219 20.199219 36.699219 C 21.097656 36.699219 21.800781 36.5 22.199219 36.402344 C 22.542969 36.285156 23.285156 35.964844 24.078125 35.4375 C 24.113281 37.992188 24.136719 41.007813 24.199219 41.699219 C 24.5 44.300781 25.199219 46.097656 26.5 47.097656 C 27.5 47.898438 29.300781 48 29.402344 48 C 31.199219 48 34 46.800781 35.199219 44.902344 C 35.800781 44 36 43.199219 36.199219 42.097656 C 36.398438 41.5 36.597656 38 36.699219 37.300781 C 36.835938 36.195313 36.941406 35.105469 37.046875 34.046875 C 37.707031 34.21875 38.519531 34.402344 39.402344 34.402344 C 41 34.402344 43.101563 33.300781 43.5 33.097656 C 44.300781 32.5 45.898438 31.101563 45.199219 29.902344 C 44.800781 29.199219 44.199219 29.199219 42.699219 29.402344 C 42.699219 29.402344 40.300781 29.699219 40.097656 29.597656 C 39.953125 29.542969 39.730469 29.402344 39.480469 29.21875 C 40 28.414063 40.460938 27.617188 41 26.902344 C 42.199219 24.601563 42.902344 22.800781 43.402344 21.402344 C 44.300781 18.902344 44.800781 16.898438 45.097656 15.5 C 45.800781 12.5 46 11.101563 45.597656 9.5 C 44.800781 6.699219 41.898438 4.300781 40.699219 3.601563 C 39.898438 3.199219 37.902344 2 34.902344 2 Z M 34.902344 4 C 37.402344 4 39.101563 5 40 5.398438 C 41.101563 6 43.601563 8 43.800781 9.898438 C 43.902344 11 44 12.101563 43.300781 15 C 42.902344 16.398438 42.5 18.199219 41.597656 20.699219 C 41.097656 22.097656 40.5 23.800781 39.300781 25.902344 C 39.269531 25.953125 39.234375 26.007813 39.203125 26.0625 C 39.320313 25.640625 39.402344 25.300781 39.402344 25.300781 C 39.601563 24.300781 39.601563 23.5 39.5 22.300781 C 39.398438 21.699219 39.300781 20.199219 39.300781 19.597656 C 39.300781 19.300781 39.597656 16.199219 39.699219 15.097656 C 39.800781 13.300781 38.699219 11.097656 38.402344 10.699219 C 36.902344 8.398438 36.101563 7.101563 34.5 5.800781 C 34.101563 5.460938 33.417969 4.894531 32.488281 4.324219 C 33.222656 4.144531 34.035156 4 34.902344 4 Z M 26.066406 4.410156 C 27.371094 4.441406 28.476563 4.800781 29.300781 5.101563 C 31.402344 5.800781 32.699219 6.898438 33.300781 7.398438 C 34.601563 8.5 35.300781 9.601563 36.800781 11.902344 C 36.910156 12.121094 37.195313 12.585938 37.421875 13.234375 C 35.375 13.046875 34.015625 13.765625 33.199219 14.5 C 32 15.5 32.097656 17 32.199219 18.097656 C 32.199219 18.898438 32.402344 19.902344 33.902344 23.300781 C 34.5 24.800781 35.097656 26.398438 35.699219 27.5 C 36.011719 28.121094 36.394531 28.691406 36.804688 29.199219 C 36.566406 29.320313 36.324219 29.476563 36.097656 29.699219 C 35.5 30.398438 35.398438 31.101563 35.199219 32.402344 C 35 33.402344 34.800781 35.5 34.699219 37.199219 C 34.699219 37.898438 34.402344 41.300781 34.300781 41.800781 C 34 42.800781 33.898438 43.300781 33.5 43.902344 C 32.800781 45 30.601563 45.902344 29.300781 45.800781 C 28.902344 45.800781 28.300781 45.800781 27.800781 45.402344 C 26.699219 44.601563 26.300781 42.800781 26.199219 41.402344 C 26.097656 40.402344 26.199219 33.199219 26 31.597656 C 25.898438 31.199219 25.800781 30.199219 25 29.5 C 24.664063 29.21875 23.96875 29.074219 23.3125 28.976563 C 23.320313 28.640625 23.339844 28.304688 23.402344 28 C 23.5 27.398438 23.699219 27.097656 23.902344 26.597656 C 24 26.300781 24.199219 25.902344 24.402344 25.402344 C 25.300781 22.601563 25.097656 18.898438 24.597656 16.597656 C 24.5 16.398438 24.097656 14.800781 22.699219 13.902344 C 21.199219 13 19.597656 13.5 18.699219 13.800781 C 18.328125 13.902344 17.960938 14.0625 17.59375 14.25 C 17.65625 13.832031 17.710938 13.410156 17.800781 13 C 18.199219 11 18.601563 9.300781 19.902344 7.601563 C 21.300781 5.898438 22.898438 4.800781 24.699219 4.5 C 25.175781 4.425781 25.632813 4.398438 26.066406 4.410156 Z M 13.71875 4.585938 C 13.953125 4.582031 14.152344 4.585938 14.300781 4.601563 C 15.863281 4.683594 17.359375 5.050781 18.84375 5.675781 C 18.660156 5.878906 18.476563 6.082031 18.300781 6.300781 C 16.601563 8.300781 16.199219 10.398438 15.800781 12.5 C 15.300781 15 15.199219 17.597656 15.597656 20.199219 L 15.402344 22.097656 C 15.300781 23.097656 15.097656 25 16.199219 27 C 16.585938 27.664063 17.011719 28.226563 17.480469 28.707031 C 16.464844 30.050781 15.386719 31.320313 14.300781 32.5 C 13.699219 33.199219 13.199219 33.699219 12.800781 33.699219 C 12.699219 33.699219 12.300781 33.5 11.699219 32.800781 C 10.597656 31.601563 10.199219 30.300781 10 29.800781 C 8.800781 26.199219 8.101563 23.898438 8 23.597656 C 7.199219 20.398438 6.800781 18.800781 6.398438 16.5 C 5.898438 13.300781 5.898438 11.699219 6.199219 10.402344 C 6.5 9 7 7.898438 7.5 7.101563 C 8.726563 5.175781 12.09375 4.628906 13.71875 4.585938 Z M 36.664063 15.125 C 36.984375 15.125 37.332031 15.164063 37.699219 15.242188 C 37.6875 16.175781 37.300781 19.105469 37.300781 19.5 C 37.300781 20.300781 37.5 21.898438 37.5 22.5 C 37.601563 23.601563 37.601563 24.199219 37.5 25 C 37.5 25 37.351563 25.714844 37.199219 26.222656 C 36.734375 25.171875 36.21875 23.917969 35.597656 22.5 C 34.097656 19.101563 34 18.402344 34 17.902344 C 34 17.199219 34 16.300781 34.597656 15.902344 C 35.160156 15.402344 35.84375 15.132813 36.664063 15.125 Z M 21.140625 15.417969 C 21.339844 15.441406 21.523438 15.5 21.699219 15.597656 C 22.5 16 22.699219 17 22.699219 17 C 23.199219 19.199219 23.398438 22.5 22.597656 24.699219 C 22.5 25.097656 22.300781 25.398438 22.199219 25.699219 C 22 26.199219 21.800781 26.699219 21.597656 27.597656 C 21.546875 27.96875 21.523438 28.335938 21.511719 28.703125 C 20.820313 28.558594 20.167969 28.3125 19.699219 28 C 18.898438 27.601563 18.300781 26.898438 17.902344 26.097656 C 17.199219 24.597656 17.300781 23.199219 17.402344 22.402344 L 17.597656 20.097656 C 17.457031 18.972656 17.390625 17.84375 17.40625 16.722656 C 17.867188 16.328125 18.46875 15.925781 19.300781 15.699219 C 19.902344 15.550781 20.558594 15.34375 21.140625 15.417969 Z M 35.886719 16.089844 C 35.625 16.101563 35.347656 16.148438 35.199219 16.199219 C 34.800781 16.300781 34.699219 16.300781 34.597656 16.5 C 34.5 16.699219 34.800781 17 34.902344 17.199219 C 35 17.199219 35.300781 17.5 35.699219 17.402344 C 36 17.300781 36.199219 17.101563 36.300781 17 C 36.402344 16.898438 36.800781 16.398438 36.5 16.199219 C 36.398438 16.097656 36.148438 16.074219 35.886719 16.089844 Z M 20.914063 16.816406 C 20.804688 16.824219 20.699219 16.851563 20.597656 16.902344 C 20.5 16.902344 20.300781 17 20.199219 17.199219 C 20.097656 17.398438 20.199219 17.597656 20.300781 17.699219 C 20.5 18 20.800781 18.300781 21.300781 18.300781 C 21.402344 18.300781 21.800781 18.300781 22.097656 18 C 22.097656 18 22.402344 17.699219 22.402344 17.402344 C 22.300781 17.199219 22.101563 17.101563 21.800781 17 C 21.574219 16.925781 21.238281 16.792969 20.914063 16.816406 Z M 19.074219 29.902344 C 19.6875 30.230469 20.425781 30.496094 21.234375 30.679688 C 21.019531 31.109375 20.710938 31.464844 20.402344 31.699219 C 19.699219 32.199219 18.800781 32.5 17.902344 32.699219 C 17.699219 32.699219 17.601563 32.800781 17.402344 32.800781 C 16.917969 32.9375 16.449219 33.089844 16.128906 33.421875 C 17.109375 32.332031 18.09375 31.128906 19.074219 29.902344 Z M 38.355469 30.703125 C 38.792969 31.03125 39.222656 31.273438 39.597656 31.402344 C 40.199219 31.601563 40.699219 31.601563 42.5 31.402344 C 42.199219 31.699219 41.300781 32.199219 40 32.402344 C 39.164063 32.484375 38.125 32.285156 37.28125 32.042969 C 37.359375 31.476563 37.449219 31.152344 37.597656 31 C 37.652344 30.949219 37.984375 30.847656 38.355469 30.703125 Z M 23.296875 31.003906 C 23.503906 31.039063 23.667969 31.066406 23.699219 31.097656 C 23.898438 31.300781 24 31.800781 24 32 C 24.011719 32.171875 24.019531 32.605469 24.027344 32.90625 C 23.203125 33.871094 21.878906 34.40625 21.597656 34.5 C 21.199219 34.699219 20 34.898438 18.800781 34.5 C 19.800781 34.199219 20.800781 33.902344 21.597656 33.300781 C 22.296875 32.800781 22.898438 32.003906 23.296875 31.003906 Z" fill="currentColor"></path>
            </svg>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '40']
        ]);

        //mysql
        $tech = Technology::factory()->create([
            'name' => 'Mysql',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<svg class="currentColorText mysql" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="50" height="50"
            viewBox="0 0 50 50">
            <path d="M 31.167969 8 C 30.699219 7.988281 30.289063 8.167969 30.078125 8.6875 C 29.71875 9.558594 30.613281 10.410156 30.933594 10.855469 C 31.15625 11.164063 31.445313 11.511719 31.605469 11.859375 C 31.710938 12.089844 31.726563 12.320313 31.816406 12.5625 C 32.039063 13.160156 32.394531 13.839844 32.679688 14.394531 C 32.824219 14.675781 32.984375 14.96875 33.167969 15.21875 C 33.28125 15.371094 33.472656 15.441406 33.503906 15.675781 C 33.316406 15.941406 33.304688 16.351563 33.199219 16.6875 C 32.722656 18.191406 32.902344 20.0625 33.59375 21.171875 C 33.808594 21.515625 34.3125 22.246094 35 21.96875 C 35.601563 21.722656 35.46875 20.960938 35.640625 20.285156 C 35.679688 20.136719 35.65625 20.023438 35.734375 19.921875 L 35.734375 19.953125 C 35.914063 20.320313 36.097656 20.6875 36.28125 21.050781 C 36.691406 21.707031 37.414063 22.390625 38.023438 22.855469 C 38.339844 23.09375 38.589844 23.507813 39 23.648438 L 39 23.617188 L 38.96875 23.617188 C 38.890625 23.492188 38.765625 23.441406 38.664063 23.34375 C 38.425781 23.109375 38.160156 22.816406 37.964844 22.546875 C 37.40625 21.792969 36.914063 20.964844 36.46875 20.105469 C 36.253906 19.695313 36.066406 19.242188 35.886719 18.824219 C 35.816406 18.660156 35.816406 18.417969 35.671875 18.332031 C 35.472656 18.640625 35.183594 18.886719 35.03125 19.25 C 34.789063 19.828125 34.753906 20.535156 34.664063 21.265625 C 34.609375 21.285156 34.632813 21.269531 34.605469 21.296875 C 34.179688 21.191406 34.027344 20.753906 33.871094 20.378906 C 33.472656 19.429688 33.394531 17.898438 33.75 16.808594 C 33.839844 16.523438 34.25 15.632813 34.085938 15.371094 C 34.007813 15.109375 33.742188 14.960938 33.597656 14.761719 C 33.414063 14.515625 33.234375 14.191406 33.109375 13.90625 C 32.78125 13.164063 32.472656 12.304688 32.125 11.554688 C 31.960938 11.195313 31.683594 10.835938 31.453125 10.515625 C 31.199219 10.164063 30.917969 9.90625 30.71875 9.476563 C 30.652344 9.328125 30.554688 9.085938 30.660156 8.929688 C 30.691406 8.824219 30.738281 8.78125 30.84375 8.746094 C 31.019531 8.609375 31.511719 8.789063 31.699219 8.867188 C 32.1875 9.070313 32.597656 9.265625 33.011719 9.539063 C 33.210938 9.671875 33.410156 9.925781 33.652344 10 L 33.925781 10 C 34.359375 10.097656 34.839844 10.027344 35.238281 10.152344 C 35.949219 10.367188 36.585938 10.703125 37.160156 11.066406 C 38.921875 12.175781 40.363281 13.757813 41.34375 15.644531 C 41.503906 15.949219 41.574219 16.242188 41.714844 16.5625 C 41.992188 17.210938 42.347656 17.882813 42.628906 18.515625 C 42.90625 19.152344 43.179688 19.789063 43.574219 20.316406 C 43.78125 20.59375 44.585938 20.746094 44.949219 20.898438 C 45.203125 21.007813 45.625 21.121094 45.863281 21.265625 C 46.328125 21.542969 46.773438 21.875 47.207031 22.183594 C 47.425781 22.335938 48.089844 22.667969 48.125 22.945313 C 47.050781 22.917969 46.230469 23.015625 45.53125 23.3125 C 45.332031 23.398438 45.011719 23.398438 44.980469 23.648438 C 45.085938 23.761719 45.105469 23.933594 45.191406 24.074219 C 45.359375 24.34375 45.640625 24.707031 45.894531 24.898438 C 46.171875 25.105469 46.453125 25.328125 46.75 25.511719 C 47.273438 25.828125 47.859375 26.011719 48.367188 26.332031 C 48.664063 26.523438 48.964844 26.761719 49.253906 26.972656 C 49.398438 27.082031 49.492188 27.246094 49.679688 27.3125 L 49.679688 27.28125 C 49.582031 27.15625 49.558594 26.984375 49.46875 26.855469 L 49.066406 26.453125 C 48.679688 25.941406 48.1875 25.488281 47.664063 25.113281 C 47.246094 24.8125 46.3125 24.40625 46.140625 23.921875 L 46.109375 23.890625 C 46.402344 23.859375 46.75 23.75 47.023438 23.675781 C 47.484375 23.554688 47.890625 23.585938 48.363281 23.464844 C 48.578125 23.402344 48.792969 23.339844 49.007813 23.28125 L 49.007813 23.15625 C 48.769531 22.914063 48.597656 22.585938 48.335938 22.363281 C 47.652344 21.78125 46.90625 21.199219 46.136719 20.714844 C 45.710938 20.445313 45.183594 20.269531 44.734375 20.042969 C 44.582031 19.964844 44.316406 19.925781 44.214844 19.796875 C 43.976563 19.496094 43.847656 19.113281 43.664063 18.761719 C 43.28125 18.023438 42.90625 17.21875 42.566406 16.441406 C 42.335938 15.914063 42.183594 15.390625 41.894531 14.914063 C 40.507813 12.636719 39.015625 11.257813 36.703125 9.90625 C 36.210938 9.617188 35.621094 9.507813 34.996094 9.359375 C 34.65625 9.335938 34.324219 9.316406 33.984375 9.296875 C 33.78125 9.210938 33.566406 8.960938 33.375 8.835938 C 32.894531 8.535156 31.949219 8.011719 31.167969 8 Z M 34.476563 11.3125 C 34.253906 11.308594 34.09375 11.339844 33.925781 11.375 L 33.925781 11.40625 L 33.957031 11.40625 C 34.0625 11.625 34.253906 11.765625 34.386719 11.953125 C 34.488281 12.167969 34.585938 12.382813 34.6875 12.597656 L 34.71875 12.566406 C 34.90625 12.433594 34.996094 12.21875 34.996094 11.894531 C 34.917969 11.816406 34.90625 11.714844 34.84375 11.621094 C 34.753906 11.492188 34.585938 11.421875 34.476563 11.3125 Z M 1.867188 23.996094 C 1.566406 24.007813 1.238281 24.066406 0.882813 24.179688 C 0.289063 24.359375 -0.00390625 24.714844 -0.00390625 25.4375 L -0.00390625 33 L 2 33 L 2 25.621094 L 4.777344 31.929688 C 5.121094 32.714844 5.589844 32.996094 6.507813 32.996094 C 7.429688 32.996094 7.878906 32.714844 8.222656 31.929688 L 11 25.78125 L 11 33 L 13 33 L 13 25.4375 C 13 24.714844 12.710938 24.359375 12.113281 24.179688 C 10.691406 23.730469 9.734375 24.117188 9.304688 25.089844 L 6.453125 31.503906 L 3.695313 25.089844 C 3.382813 24.359375 2.757813 23.960938 1.867188 23.996094 Z M 26.246094 24 C 25.457031 24 23 24.09375 23 26 L 23 27.234375 C 23 28.109375 23.769531 28.824219 25.4375 29 C 25.625 29.011719 25.8125 29.027344 26 29.027344 C 26 29.027344 27.945313 28.988281 28 29 C 29.125 29 29 29.875 29 30 L 29 31 C 29 31.136719 28.96875 32 27.988281 32 L 23 32 L 23 33 L 28.007813 33 C 28.664063 33 29.300781 32.863281 29.808594 32.625 C 30.652344 32.238281 31 31.714844 31 31.027344 L 31 29.597656 C 31 28.0625 29.09375 28 28 28 L 26 28 C 25.214844 28 25.09375 27.523438 25 27 L 25 26 C 25.09375 25.601563 25.269531 25.0625 25.964844 25 L 31 25 L 31 24 Z M 33.980469 24 C 32.503906 24.203125 31.984375 24.9375 31.984375 26 L 31.984375 31 C 31.984375 31.972656 32.527344 32.558594 33.644531 32.863281 C 34.019531 32.96875 34.359375 33.011719 34.679688 33.011719 L 36.90625 33 L 38.214844 33 L 39.328125 34 L 41.578125 34 L 40.03125 32.605469 C 40.757813 32.304688 40.984375 31.84375 40.984375 30.980469 L 40.984375 26 C 40.984375 24.9375 40.292969 24.203125 38.816406 24 Z M 42 24 L 42 30.957031 C 42 32.164063 42.683594 32.84375 44.492188 32.980469 C 44.660156 32.988281 44.832031 33 45 33 L 50 33 L 50 32 L 45.378906 32 C 44.347656 32 44 31.566406 44 30.949219 L 44 24 Z M 35.171875 25 L 37.746094 25 C 38.425781 25 38.882813 25.546875 38.984375 26 C 38.984375 26 39 30.65625 39 31 C 39 31.34375 38.808594 31.5 38.808594 31.5 L 38.265625 31 L 36 31 L 37.113281 32 L 35.171875 32 C 34.476563 32 34.085938 31.484375 33.984375 31 L 33.984375 26.101563 C 33.984375 25.570313 34.390625 25 35.171875 25 Z M 14 27 C 14.039063 27.039063 14 31.261719 14 31.34375 C 14.015625 32.21875 15.125 32.984375 16.863281 33 L 20 33 L 20 33.066406 C 20 33.253906 20.136719 33.878906 19 34 C 18.988281 34 14.011719 34 14 34 L 14 35 L 19.214844 35 C 20.097656 34.972656 22.011719 34.773438 22 33.242188 C 22 33.214844 22.007813 27 22 27 L 20 27 L 20 32 C 19.96875 32 17.523438 32.007813 17.03125 32 C 16.066406 31.984375 15.984375 31.433594 16 31.222656 L 16 27 Z" fill="currentColor"></path>
            </svg>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '60']
        ]);

        //JS
        $tech = Technology::factory()->create([
            'name' => 'JavaScript',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<i class="fa-brands fa-js"></i>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '40']
        ]);

        //nodejs
        $tech = Technology::factory()->create([
            'name' => 'NodeJs',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<i class="fa-brands fa-node-js"></i>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '40']
        ]);

        //Java
        $tech = Technology::factory()->create([
            'name' => 'Java',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<i class="fa-brands fa-java"></i>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '65']
        ]);

        //git
        $tech = Technology::factory()->create([
            'name' => 'Git',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<i class="fa-brands fa-git"></i>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '65']
        ]);

        //linux
        $tech = Technology::factory()->create([
            'name' => 'Linux',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<i class="fa-brands fa-linux"></i>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '65']
        ]);

        //DOCKER
        $tech = Technology::factory()->create([
            'name' => 'Docker',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<i class="fa-brands fa-docker"></i>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '65']
        ]);

        //ionic
        $tech = Technology::factory()->create([
            'name' => 'Ionic',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<svg class="currentColorText" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 30 30">
            <path d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 21.627 8.373 27 15 27 C 21.627 27 27 21.627 27 15 C 27 13.079 26.536375 11.270156 25.734375 9.6601562 C 25.310375 10.196156 24.737266 10.598453 24.072266 10.814453 C 24.661266 12.088453 25 13.504 25 15 C 25 20.523 20.523 25 15 25 C 9.477 25 5 20.523 5 15 C 5 9.477 9.477 5 15 5 C 16.721 5 18.341859 5.4351719 19.755859 6.2011719 C 20.012859 5.5601719 20.449766 5.0120469 21.009766 4.6230469 C 19.241766 3.5970469 17.193 3 15 3 z M 23 5 A 2.5 2.5 0 0 0 23 10 A 2.5 2.5 0 0 0 23 5 z M 15 9.75 A 5.25 5.25 0 0 0 15 20.25 A 5.25 5.25 0 0 0 15 9.75 z" fill="currentColor"></path>
            </svg>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '60']
        ]);

        //Angular
        $tech = Technology::factory()->create([
            'name' => 'Angular',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<i class="fa-brands fa-angular"></i>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '60']
        ]);

        //Vue
        $tech = Technology::factory()->create([
            'name' => 'Vue',
            'description' => 'pendiente',
            'translations' => '',
            'image' => '',
            'icon' => '<i class="fa-brands fa-vuejs"></i>',
            'is_published' => 1,
        ]);
        $user->technologies()->attach([
            $tech->id => ['expertise' => '60']
        ]);

        // $tech = Technology::factory()->create([
        //     'name' => '',
        //     'description' => 'pendiente',
        //     'translations' => '',
        //     'image' => '',
        //     'icon' => '',
        //     'is_published' => 1,
        // ]);
        // $user->technologies()->sync([
        //     $tech->id => ['expertise' => '']
        // ]);
    }
}
