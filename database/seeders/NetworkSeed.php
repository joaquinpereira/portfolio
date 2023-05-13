<?php

namespace Database\Seeders;

use App\Models\Network;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NetworkSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1)->first();

        $network = Network::factory()->create([
            'name' => "twitter",
            'image' => "https://cdn.pixabay.com/photo/2017/03/24/07/28/twitter-2170426_960_720.png",
            'icon' => "<i class='bx bxl-twitter'></i>",
        ]);

        $user->networks()->attach([
            $network->id => ['url' => 'https://twitter.com/pereira_joaquin'],
        ]);

        $network = Network::factory()->create([
            'name' => "linkedin",
            'image' => "https://cdn.pixabay.com/photo/2017/03/24/07/28/linkedin-2170421_960_720.png",
            'icon' => "<i class='bx bxl-linkedin'></i>",
        ]);

        $user->networks()->attach([
            $network->id => ['url' => 'https://www.linkedin.com/in/joaquin-adan-pereira-seijas-01697484/']
        ]);

        $network = Network::factory()->create([
            'name' => "dev.to",
            'image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBkUmy9D7_5gXnMW4lXfxu-abUQtSqwW2cVeCVA9F1AqSzMD2X",
            'icon' => "<i class='bx bxl-dev-to'></i>",
        ]);

        $user->networks()->attach([
            $network->id => ['url' => 'https://dev.to/joaquinpereira']
        ]);
    }
}
