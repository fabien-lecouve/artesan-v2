<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Estimate;
use App\Models\EstimateStatus;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Estimate>
 */
class EstimateFactory extends Factory
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
            'estimate_status_id' => EstimateStatus::inRandomOrder()->value('id'),
            'project_id' => Project::inRandomOrder()->value('id'),
            'reference' => 'DE-' . now()->year . '-' . fake()->unique()->numberBetween(1, 9999),
            'label' => fake()->word(),
            'notes' => fake()->sentence(),
            'issued_at' => fake()->date(),
            'valid_until' => fake()->date(),
            'total_ht' => fake()->randomFloat(2, 0, 50000),
            'total_vat' => fake()->randomFloat(2, 0, 10000),
            'total_ttc' => fake()->randomFloat(2, 0, 60000),
        ];
    }
}
