<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = [
            [
                'club_id' => 1,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png',
                'name' => 'Timo Werner',
                'height' => 180,
                'position' => 'Forward'
            ],
            [
                'club_id' => 1,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p184341.png',
                'name' => 'Mason Mount',
                'height' => 178,
                'position' => 'Midfielder'
            ],
            [
                'club_id' => 2,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p184029.png',
                'name' => 'Martin Ødegaard',
                'height' => 178,
                'position' => 'Midfielder'
            ],
            [
                'club_id' => 2,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p182539.png',
                'name' => 'Dani Ceballos',
                'height' => 179,
                'position' => 'Midfielder'
            ],
            [
                'club_id' => 3,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p106760.png',
                'name' => 'Luke Shaw',
                'height' => 185,
                'position' => 'Defender'
            ],
            [
                'club_id' => 3,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p141746.png',
                'name' => 'Bruno Fernandes',
                'height' => 179,
                'position' => 'Midfielder'
            ],
            [
                'club_id' => 4,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p121160.png',
                'name' => 'Ederson',
                'height' => 188,
                'position' => 'Goalkeeper'
            ],
            [
                'club_id' => 4,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p103025.png',
                'name' => 'Riyard Mahrez',
                'height' => 179,
                'position' => 'Forward'
            ],
            [
                'club_id' => 5,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p194634.png',
                'name' => 'Diogo Jota',
                'height' => 178,
                'position' => 'Forward'
            ],
            [
                'club_id' => 5,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p97032.png',
                'name' => 'Virgil van Dijk',
                'height' => 193,
                'position' => 'Defender'
            ],
            [
                'club_id' => 6,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p36903.png',
                'name' => 'Gareth Bale',
                'height' => 185,
                'position' => 'Forward'
            ],
            [
                'club_id' => 6,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p199249.png',
                'name' => 'Sergio Reguilon',
                'height' => 178,
                'position' => 'Defender'
            ]
        ];

        foreach ($players as $key => $value) {
            Player::create($value);
        }
    }
}
