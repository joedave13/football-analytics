<?php

namespace Database\Seeders;

use App\Models\Matches;
use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matches = [
            [
                'club_id' => 1,
                'rival_id' => 2,
                'schedule' => '2021-08-25 00:00:00'
            ],
            [
                'club_id' => 2,
                'rival_id' => 1,
                'schedule' => '2021-08-25 00:00:00'
            ],
            [
                'club_id' => 3,
                'rival_id' => 4,
                'schedule' => '2021-08-25 00:00:00'
            ],
            [
                'club_id' => 4,
                'rival_id' => 3,
                'schedule' => '2021-08-25 00:00:00'
            ],
            [
                'club_id' => 5,
                'rival_id' => 6,
                'schedule' => '2021-08-25 00:00:00'
            ],
            [
                'club_id' => 6,
                'rival_id' => 5,
                'schedule' => '2021-08-25 00:00:00'
            ]
        ];

        foreach ($matches as $key => $value) {
            Matches::create($value);
        }
    }
}
