<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Stadium;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stadiums = Stadium::all();

        if ($stadiums->isEmpty()) {
            $this->command->warn('No stadiums found, please run StadiumSeeder first.');
            return;
        }

        $reservations = [
            [
                'stadium_id' => $stadiums->random()->id,
                'date' => Carbon::now()->addDays(1)->format('Y-m-d'),
                'time' => '10:00:00',
                'price' => 150000.00,
            ],
            [
                'stadium_id' => $stadiums->random()->id,
                'date' => Carbon::now()->addDays(2)->format('Y-m-d'),
                'time' => '14:00:00',
                'price' => 200000.00,
            ],
            [
                'stadium_id' => $stadiums->random()->id,
                'date' => Carbon::now()->addDays(3)->format('Y-m-d'),
                'time' => '19:00:00',
                'price' => 250000.00,
            ],
            [
                'stadium_id' => $stadiums->random()->id,
                'date' => Carbon::now()->addDays(5)->format('Y-m-d'),
                'time' => '08:00:00',
                'price' => 120000.00,
            ],
            [
                'stadium_id' => $stadiums->random()->id,
                'date' => Carbon::now()->addDays(7)->format('Y-m-d'),
                'time' => '21:00:00',
                'price' => 300000.00,
            ],
        ];

        foreach ($reservations as $res) {
            Reservation::create($res);
        }
    }
}
