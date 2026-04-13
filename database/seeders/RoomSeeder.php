<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'code' => 'chambre',
                'label' => 'chambre'                
            ],
            [
                'code' => 'living_room',
                'label' => 'salon'                
            ],
            [
                'code' => 'kitchen',
                'label' => 'cuisine'                
            ],
            [
                'code' => 'bathroom',
                'label' => 'salle de bain',
            ],
            [
                'code' => 'restroom',
                'label' => 'WC'                
            ],
            [
                'code' => 'corridor',
                'label' => 'couloir'                
            ],
            [
                'code' => 'hall',
                'label' => 'entrée'                
            ],
            [
                'code' => 'stairs',
                'label' => 'escaliers'                
            ],
            [
                'code' => 'garage',
                'label' => 'garage'                
            ],
            [
                'code' => 'outside',
                'label' => 'extérieur'                
            ]
        ];
        DB::table('rooms')->insert($rooms);
    }
}
