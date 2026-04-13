<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $invoiceStatuses = [
            [
                'code' => 'draft',
                'label' => 'brouillon'
            ],
            [
                'code' => 'issued',
                'label' => 'émise'
            ],
            [
                'code' => 'pending',
                'label' => 'en attente de paiement'
            ],
            [
                'code' => 'partially_paid',
                'label' => 'partiellement payée'
            ],
            [
                'code' => 'paid',
                'label' => 'payée'
            ],
            [
                'code' => 'overdue',
                'label' => 'en retard'
            ],
            [
                'code' => 'cancelled',
                'label' => 'annulé'
            ],
            [
                'code' => 'refunded',
                'label' => 'remboursée'
            ]
        ];
        DB::table('invoice_statuses')->insert($invoiceStatuses);
    }
}
