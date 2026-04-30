<?php

namespace Database\Seeders;

use App\Models\Stadium;
use Illuminate\Database\Seeder;

class StadiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stadiums = [
            [
                'name' => 'Stadion Utama Gelora Bung Karno',
                'location' => 'Jakarta Pusat',
                'price' => 5000000.00,
            ],
            [
                'name' => 'Jakarta International Stadium (JIS)',
                'location' => 'Jakarta Utara',
                'price' => 4500000.00,
            ],
            [
                'name' => 'Stadion Gelora Bung Tomo',
                'location' => 'Surabaya',
                'price' => 3000000.00,
            ],
            [
                'name' => 'Stadion Manahan',
                'location' => 'Solo',
                'price' => 2000000.00,
            ],
            [
                'name' => 'Stadion Kapten I Wayan Dipta',
                'location' => 'Bali',
                'price' => 1500000.00,
            ],
        ];

        foreach ($stadiums as $stadium) {
            Stadium::create($stadium);
        }
    }
}
