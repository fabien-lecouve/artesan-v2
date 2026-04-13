<?php

namespace Database\Seeders;

use App\Models\Estimate;
use App\Models\EstimateLine;
use App\Models\EstimateRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstimateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estimate::factory()
            ->has(
                EstimateRoom::factory()
                    ->count(3)
                    ->has(
                        EstimateLine::factory()->count(5),
                        'lines'
                    ),
                'rooms'
            )
            ->count(100)
            ->create();
    }
}
