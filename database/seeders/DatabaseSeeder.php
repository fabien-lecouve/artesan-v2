<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            InsuranceSeeder::class,
            CompanySeeder::class,
            UserSeeder::class,
            CustomerSeeder::class,
            ProjectStatusSeeder::class,
            ProjectTypeSeeder::class,
            ProjectSeeder::class,
            CategorySeeder::class,
            VatRateSeeder::class,
            UnitSeeder::class,
            SupplySeeder::class,
            PriceRuleSeeder::class,
            EstimateStatusSeeder::class,
            RoomSeeder::class,
            EstimateSeeder::class,
            PaymentMethodSeeder::class,
            InvoiceStatusSeeder::class,
            InvoiceTypeSeeder::class,
            InvoiceSeeder::class,
            TemplateSeeder::class
        ]);
    }
}
