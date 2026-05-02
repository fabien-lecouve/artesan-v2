<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'code' => 'prise_de_courant',
                'label' => 'prise de courant'
            ],
            [
                'code' => 'circuit_eclairage',
                'label' => 'circuit éclairage'
            ],
            [
                'code' => 'prise_de_communication',
                'label' => 'prise de communication'
            ],
            [
                'code' => 'tableau_electrique',
                'label' => 'tableau électrique'
            ]
        ];
        DB::table('categories')->insert($categories);
    }
}
