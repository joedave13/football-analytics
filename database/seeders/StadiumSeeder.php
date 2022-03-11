<?php

namespace Database\Seeders;

use App\Models\Stadium;
use Illuminate\Database\Seeder;

class StadiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stadia = [
            [
                'name' => 'Stamford Bridge',
                'capacity' => 40000,
                'address' => 'Stamford Bridge, Fulham Road, London, SW6 1HS'
            ],
            [
                'name' => 'Emirates Stadium',
                'capacity' => 60000,
                'address' => 'Highbury House, 75 Drayton Park, London, N5 1BU'
            ],
            [
                'name' => 'Old Trafford',
                'capacity' => 74000,
                'address' => 'Sir Matt Busby Way, Old Trafford, Manchester, M16 0RA'
            ],
            [
                'name' => 'Etihad Stadium',
                'capacity' => 55000,
                'address' => 'Etihad Stadium, Etihad Campus, Manchester, M11 3FF'
            ],
            [
                'name' => 'Anfield',
                'capacity' => 53000,
                'address' => 'Anfield, Anfield Road, Liverpool, L4 0TH'
            ],
            [
                'name' => 'Tottenham Hotspur Stadium',
                'capacity' => 62000,
                'address' => 'Lilywhite House, 782 High Road, Tottenham, London, N17 0BX'
            ],
        ];

        foreach ($stadia as $key => $value) {
            Stadium::create($value);
        }
    }
}
