<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            [
                'code' => 'u',
                'label' => 'unité'
            ],
            [
                'code' => 'm2',
                'label' => 'mètre carré'
            ],
            [
                'code' => 'kg',
                'label' => 'kilogramme'
            ]
        ];
        DB::table('units')->insert($units);
    }
}
