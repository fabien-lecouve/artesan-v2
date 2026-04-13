<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Customer;
use App\Models\Project;
use App\Models\ProjectStatus;
use App\Models\ProjectType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
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
            'project_type_id' => ProjectType::inRandomOrder()->value('id'),
            'project_status_id' => ProjectStatus::inRandomOrder()->value('id'),
            'customer_id' => Customer::inRandomOrder()->value('id'),
            'reference' => 'CH-' . now()->year . '-' . fake()->unique()->numberBetween(1, 9999),
            'label' => fake()->word(),
            'start_date' => fake()->dateTime(),
            'end_date' => fake()->dateTime()
        ];
    }
}
