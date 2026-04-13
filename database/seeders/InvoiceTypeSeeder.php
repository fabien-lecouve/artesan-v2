<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $invoiceTypes = [
            [
                'code' => 'deposit',
                'label' => 'facture d\'acompte'
            ],
            [
                'code' => 'progress',
                'label' => 'facture intermédiaire'
            ],
            [
                'code' => 'final',
                'label' => 'facture de solde'
            ],
            [
                'code' => 'correction',
                'label' => 'facture corrective'
            ]
        ];
        DB::table('invoice_types')->insert($invoiceTypes);
    }
}
