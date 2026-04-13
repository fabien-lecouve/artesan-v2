<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VatRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vatRates = [
            [
                'code' => '5.5',
                'label' => '5,5',
                'rate' => 5.50
            ],
            [
                'code' => '10.00',
                'label' => '10.00',
                'rate' => 10.00
            ],
            [
                'code' => '20.00',
                'label' => '20.00',
                'rate' => 20.00
            ]
        ];

        DB::table('vat_rates')->insert($vatRates);
    }
}
