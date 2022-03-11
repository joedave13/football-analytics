<?php

namespace Database\Seeders;

use App\Models\Manager;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managers = [
            [
                'club_id' => 1,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man39237.png',
                'name' => 'Thomas Tuchel',
                'old' => 47,
                'nationality' => 'German'
            ],
            [
                'club_id' => 2,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man51018.png',
                'name' => 'Mikel Arteta',
                'old' => 38,
                'nationality' => 'Spain'
            ],
            [
                'club_id' => 3,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man40342.png',
                'name' => 'Ole Gunnar Solskjær',
                'old' => 48,
                'nationality' => 'Norway'
            ],
            [
                'club_id' => 4,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man37974.png',
                'name' => 'Joseph Guardiola',
                'old' => 50,
                'nationality' => 'Spain'
            ],
            [
                'club_id' => 5,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man279.png',
                'name' => 'Jurgen Klopp',
                'old' => 53,
                'nationality' => 'Germany'
            ],
            [
                'club_id' => 6,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man134.png',
                'name' => 'Jose Mourinho',
                'old' => 58,
                'nationality' => 'Portugal'
            ]
        ];

        foreach ($managers as $key => $value) {
            Manager::create($value);
        }
    }
}
