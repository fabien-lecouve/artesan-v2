<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\EstimateRoom;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<EstimateRoom>
 */
class EstimateRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::inRandomOrder()->value('id'),
            'room_id' => Room::inRandomOrder()->value('id'),
            'position' => fake()->numberBetween(1, 50),
            'warranty' => fake()->numberBetween(1, 5),
            'supplies' => fake()->randomFloat(2, 10, 5000),
            'labor' => fake()->randomFloat(2, 10, 5000),
            'subtotal' => fake()->randomFloat(2, 10, 5000),
        ];
    }
}
