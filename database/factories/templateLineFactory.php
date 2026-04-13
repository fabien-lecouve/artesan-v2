<?php

namespace Database\Factories;

use App\Models\Supply;
use App\Models\templateLine;
use App\Models\TemplateRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<templateLine>
 */
class templateLineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => fake()->numberBetween(1, 2),
            'template_room_id' => TemplateRoom::inRandomOrder()->value('id'),
            'supply_id' => Supply::inRandomOrder()->value('id'),
            'quantity' => fake()->numberBetween(1, 5),
            'position' => fake()->numberBetween(1, 50),
            'label' => fake()->word(),
            'description_override' => fake()->sentence()
        ];
    }
}
