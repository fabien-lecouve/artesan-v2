<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Insurance;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'insurance_id' => Insurance::inRandomOrder()->value('id'),
            'name' => fake()->company(),
            'email' => fake()->unique()->safeEmail(),
            'siret' => fake()->uuid(),
            'rm_number' => fake()->uuid(),
            'vat_number' => fake()->uuid(),
            'logo_path' => 'https://picsum.photos/seed/'.fake()->uuid.'/600/400',        
            'address' => fake()->streetAddress(),
            'complementary_address' => fake()->secondaryAddress(),
            'postal_code' => fake()->postcode(),
            'city' => fake()->city(),
            'phone' => fake()->phoneNumber()
        ];
    }
}
