<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectStatuses = [
            [
                'code' => 'draft',
                'label' => 'brouillon'
            ],
            [
                'code' => 'planned',
                'label' => 'planifié'
            ],
            [
                'code' => 'in_progress',
                'label' => 'en cours'
            ],
            [
                'code' => 'paused',
                'label' => 'en pause'
            ],
            [
                'code' => 'waiting_material',
                'label' => 'en attente matériel'
            ],
            [
                'code' => 'waiting_customer',
                'label' => 'en attente client'
            ],
            [
                'code' => 'completed',
                'label' => 'terminé'
            ],
            [
                'code' => 'cancelled',
                'label' => 'annulé'
            ],
            [
                'code' => 'archived',
                'label' => 'archivé'
            ]
        ];
        DB::table('project_statuses')->insert($projectStatuses);
    }
}
