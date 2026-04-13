<?php

namespace Database\Factories;

use App\Models\EstimateLine;
use App\Models\Supply;
use App\Models\VatRate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<EstimateLine>
 */
class EstimateLineFactory extends Factory
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
            'supply_id' => Supply::inRandomOrder()->value('id'),
            'vat_rate_id' => VatRate::inRandomOrder()->value('id'),
            'quantity' => fake()->numberBetween(1, 5),
            'position' => fake()->numberBetween(1, 50),
            'label' => fake()->word(),
            'description_override' => fake()->sentence(),
            'unit_cost' => fake()->randomFloat(2, 5, 200),
            'unit_price' => fake()->randomFloat(2, 10, 400),
            'labor_cost' => fake()->randomFloat(2, 5, 150),
            'labor_price' => fake()->randomFloat(2, 10, 300),
        ];
    }
}
