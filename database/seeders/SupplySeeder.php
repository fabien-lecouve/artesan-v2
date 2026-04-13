<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supplies = [
            [
                'company_id' => 1,
                'category_id' => 1,
                'unit_id' => 1,
                'name' => 'prise 16A',
                'unit_cost' => 30,
                'warranty' => 2,
                'description_singular' => 'Création d\'un circuit électrique composé d\' une prise de courant',
                'description_plural' => 'Création d\'un circuit électrique composé de :quantity prises de courant',
            ],
            [
                'company_id' => 1,
                'category_id' => 1,
                'unit_id' => 1,
                'name' => 'prise 16A double',
                'unit_cost' => 35,
                'warranty' => 2,
                'description_singular' => 'Création d\'une double prise de courant',
                'description_plural' => '',
            ],
            [
                'company_id' => 1,
                'category_id' => 2,
                'unit_id' => 1,
                'name' => 'simple allumage',
                'unit_cost' => 30,
                'warranty' => 2,
                'description_singular' => 'Création d\'un circuit lumineux commandé par un simple interrupteur',
                'description_plural' => '',
            ],
            [
                'company_id' => 1,
                'category_id' => 2,
                'unit_id' => 1,
                'name' => 'double allumage',
                'unit_cost' => 35,
                'warranty' => 2,
                'description_singular' => 'Création d\'un double circuit lumineux commandé par un double interrupteur',
                'description_plural' => '',
            ],
            [
                'company_id' => 1,
                'category_id' => 3,
                'unit_id' => 1,
                'name' => 'prise RJ45',
                'unit_cost' => 35,
                'warranty' => 2,
                'description_singular' => 'Création d\'une prise RJ45',
                'description_plural' => 'Création de :quantity prises RJ45',
            ],
            [
                'company_id' => 1,
                'category_id' => 3,
                'unit_id' => 1,
                'name' => 'prise TV',
                'unit_cost' => 30,
                'warranty' => 2,
                'description_singular' => 'Création d\'une prise TV',
                'description_plural' => 'Création de :quantity prises TV',
            ],
            [
                'company_id' => 1,
                'category_id' => 4,
                'unit_id' => 1,
                'name' => '1 rangée',
                'unit_cost' => 200,
                'warranty' => 2,
                'description_singular' => 'Fourniture et pose d\'un tableau électrique (1 rangée) et de ses composants : Interrupteurs différentiel / Disjoncteurs divisionnaires / Accessoires de raccordement',
                'description_plural' => '',
            ],
            [
                'company_id' => 1,
                'category_id' => 4,
                'unit_id' => 1,
                'name' => '2 rangées',
                'unit_cost' => 200,
                'warranty' => 2,
                'description_singular' => 'Fourniture et pose d\'un tableau électrique (2 rangées) et de ses composants : Interrupteurs différentiel / Disjoncteurs divisionnaires / Accessoires de raccordement',
                'description_plural' => '',
            ],
            [
                'company_id' => 1,
                'category_id' => 4,
                'unit_id' => 1,
                'name' => '3 rangées',
                'unit_cost' => 300,
                'warranty' => 2,
                'description_singular' => 'Fourniture et pose d\'un tableau électrique (3 rangées) et de ses composants : Interrupteurs différentiel / Disjoncteurs divisionnaires / Accessoires de raccordement',
                'description_plural' => '',
            ],
            [
                'company_id' => 1,
                'category_id' => 4,
                'unit_id' => 1,
                'name' => '4 rangées',
                'unit_cost' => 400,
                'warranty' => 2,
                'description_singular' => 'Fourniture et pose d\'un tableau électrique (4 rangées) et de ses composants : Interrupteurs différentiel / Disjoncteurs divisionnaires / Accessoires de raccordement',
                'description_plural' => '',
            ],
        ];
        DB::table('supplies')->insert($supplies);
    }
}
