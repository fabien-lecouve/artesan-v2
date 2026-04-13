<?php

namespace Database\Seeders;

use App\Models\Template;
use App\Models\TemplateLine;
use App\Models\TemplateRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Template::factory()
            ->has(
                TemplateRoom::factory()
                    ->count(3)
                    ->has(
                        TemplateLine::factory()->count(5),
                        'lines'
                    ),
                    'rooms'
            )
            ->count(3)
            ->create();
    }
}
