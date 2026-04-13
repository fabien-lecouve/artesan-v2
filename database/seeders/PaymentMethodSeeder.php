<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethods = [
            [
                'code' => 'transfer',
                'label' => 'virement bancaire'
            ],
            [
                'code' => 'check',
                'label' => 'chèque'
            ],
            [
                'code' => 'cash',
                'label' => 'espèces'
            ],
            [
                'code' => 'card',
                'label' => 'carte bancaire'
            ]
        ];
        DB::table('payment_methods')->insert($paymentMethods);
    }
}
