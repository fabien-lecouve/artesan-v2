<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectTypes = [
            [
                'code' => 'new',
                'label' => 'neuf'
            ],
            [
                'code' => 'renovation',
                'label' => 'rénovation'
            ],
            [
                'code' => 'repair',
                'label' => 'dépannage'
            ]
        ];
        DB::table('project_types')->insert($projectTypes);
    }
}
