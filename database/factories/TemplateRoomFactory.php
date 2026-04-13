<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Room;
use App\Models\Template;
use App\Models\TemplateRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TemplateRoom>
 */
class TemplateRoomFactory extends Factory
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
            'template_id' => Template::inRandomOrder()->value('id'),
            'room_id' => Room::inRandomOrder()->value('id'),
            'position' => fake()->numberBetween(1, 50)
        ];
    }
}
