<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $priceRules = [
            [
                'supply_id' => 1,
                'project_type_id' => 1,
                'vat_rate_id' => 2,
                'unit_price' => 40,
                'labor_cost' => 10,
                'labor_price' => 50,
            ],
            [
                'supply_id' => 2,
                'project_type_id' => 1,
                'vat_rate_id' => 2,
                'unit_price' => 45,
                'labor_cost' => 10,
                'labor_price' => 65,
            ],
            [
                'supply_id' => 3,
                'project_type_id' => 1,
                'vat_rate_id' => 2,
                'unit_price' => 40,
                'labor_cost' => 10,
                'labor_price' => 55,
            ],
            [
                'supply_id' => 4,
                'project_type_id' => 1,
                'vat_rate_id' => 2,
                'unit_price' => 45,
                'labor_cost' => 10,
                'labor_price' => 85,
            ],
            [
                'supply_id' => 5,
                'project_type_id' => 1,
                'vat_rate_id' => 2,
                'unit_price' => 45,
                'labor_cost' => 10,
                'labor_price' => 70,
            ],
            [
                'supply_id' => 6,
                'project_type_id' => 1,
                'vat_rate_id' => 2,
                'unit_price' => 40,
                'labor_cost' => 10,
                'labor_price' => 70,
            ],
            [
                'supply_id' => 7,
                'project_type_id' => 1,
                'vat_rate_id' => 2,
                'unit_price' => 300,
                'labor_cost' => 10,
                'labor_price' => 175,
            ],
            [
                'supply_id' => 8,
                'project_type_id' => 1,
                'vat_rate_id' => 2,
                'unit_price' => 400,
                'labor_cost' => 10,
                'labor_price' => 125,
            ],
            [
                'supply_id' => 9,
                'project_type_id' => 1,
                'vat_rate_id' => 2,
                'unit_price' => 450,
                'labor_cost' => 10,
                'labor_price' => 200,
            ],
            [
                'supply_id' => 10,
                'project_type_id' => 1,
                'vat_rate_id' => 2,
                'unit_price' => 500,
                'labor_cost' => 10,
                'labor_price' => 375,
            ],
            [
                'supply_id' => 1,
                'project_type_id' => 2,
                'vat_rate_id' => 2,
                'unit_price' => 45,
                'labor_cost' => 10,
                'labor_price' => 100,
            ],
            [
                'supply_id' => 2,
                'project_type_id' => 2,
                'vat_rate_id' => 2,
                'unit_price' => 55,
                'labor_cost' => 10,
                'labor_cost' => 10,
                'labor_price' => 115,
            ],
            [
                'supply_id' => 3,
                'project_type_id' => 2,
                'vat_rate_id' => 2,
                'unit_price' => 45,
                'labor_cost' => 10,
                'labor_cost' => 10,
                'labor_price' => 10,
            ],
            [
                'supply_id' => 4,
                'project_type_id' => 2,
                'vat_rate_id' => 2,
                'unit_price' => 60,
                'labor_cost' => 10,
                'labor_cost' => 10,
                'labor_price' => 145,
            ],
            [
                'supply_id' => 5,
                'project_type_id' => 2,
                'vat_rate_id' => 2,
                'unit_price' => 60,
                'labor_cost' => 10,
                'labor_cost' => 10,
                'labor_price' => 100,
            ],
            [
                'supply_id' => 6,
                'project_type_id' => 2,
                'vat_rate_id' => 2,
                'unit_price' => 50,
                'labor_cost' => 10,
                'labor_cost' => 10,
                'labor_price' => 100,
            ],
            [
                'supply_id' => 7,
                'project_type_id' => 2,
                'vat_rate_id' => 2,
                'unit_price' => 300,
                'labor_cost' => 10,
                'labor_price' => 125,
            ],
            [
                'supply_id' => 8,
                'project_type_id' => 2,
                'vat_rate_id' => 2,
                'unit_price' => 300,
                'labor_cost' => 10,
                'labor_price' => 325,
            ],
            [
                'supply_id' => 9,
                'project_type_id' => 2,
                'vat_rate_id' => 2,
                'unit_price' => 400,
                'labor_cost' => 10,
                'labor_price' => 425,
            ],
            [
                'supply_id' => 10,
                'project_type_id' => 2,
                'vat_rate_id' => 2,
                'unit_price' => 500,
                'labor_cost' => 10,
                'labor_price' => 550,
            ],
        ];
        DB::table('price_rules')->insert($priceRules);
    }
}
