<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstimateStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estimateStatuses = [
            [
                'code' => 'draft',
                'label' => 'brouillon'
            ],
            [
                'code' => 'sent',
                'label' => 'envoyé'
            ],
            [
                'code' => 'accepted',
                'label' => 'accepté'
            ],
            [
                'code' => 'signed',
                'label' => 'signé'
            ],
            [
                'code' => 'refused',
                'label' => 'refusé'
            ],
            [
                'code' => 'expired',
                'label' => 'expiré'
            ],
            [
                'code' => 'cancelled',
                'label' => 'annulé'
            ]
        ];
        DB::table('estimate_statuses')->insert($estimateStatuses);
    }
}
