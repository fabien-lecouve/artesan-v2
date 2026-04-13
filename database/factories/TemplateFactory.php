<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\ProjectType;
use App\Models\Template;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Template>
 */
class TemplateFactory extends Factory
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
            'label' => fake()->word()
        ];
    }
}
