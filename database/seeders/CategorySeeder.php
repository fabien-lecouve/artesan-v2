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
                'name' => 'prise de courant'
            ],
            [
                'code' => 'circuit_eclairage',
                'name' => 'circuit éclairage'
            ],
            [
                'code' => 'prise_de_communication',
                'name' => 'prise de communication'
            ],
            [
                'code' => 'tableau_electrique',
                'name' => 'tableau électrique'
            ]
        ];
        DB::table('categories')->insert($categories);
    }
}
