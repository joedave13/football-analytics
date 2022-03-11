<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clubs = [
            [
                'stadium_id' => 1,
                'name' => 'Chelsea FC',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url' => 'https://www.chelseafc.com/',
                'trophy' => 19
            ],
            [
                'stadium_id' => 2,
                'name' => 'Arsenal',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t3.svg',
                'url' => 'https://www.arsenal.com/',
                'trophy' => 8
            ],
            [
                'stadium_id' => 3,
                'name' => 'Manchester United',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t1.svg',
                'url' => 'https://www.manutd.com/',
                'trophy' => 20
            ],
            [
                'stadium_id' => 4,
                'name' => 'Manchester City',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t43.svg',
                'url' => 'https://www.mancity.com/',
                'trophy' => 12
            ],
            [
                'stadium_id' => 5,
                'name' => 'Liverpool',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t14.svg',
                'url' => 'https://www.liverpoolfc.com/',
                'trophy' => 11
            ],
            [
                'stadium_id' => 6,
                'name' => 'Tottenham Hotspur',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t6.svg',
                'url' => 'https://www.tottenhamhotspur.com/',
                'trophy' => 1
            ]
        ];

        foreach ($clubs as $key => $value) {
            Club::create($value);
        }
    }
}
