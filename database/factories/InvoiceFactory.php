<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceStatus;
use App\Models\InvoiceType;
use App\Models\PaymentMethod;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::inRandomOrder()->value('id'),
            'customer_id' => Customer::inRandomOrder()->value('id'),
            'project_id' => Project::inRandomOrder()->value('id'),
            'invoice_status_id' => InvoiceStatus::inRandomOrder()->value('id'),
            'invoice_type_id' => InvoiceType::inRandomOrder()->value('id'),
            'payment_method_id' => PaymentMethod::inRandomOrder()->value('id'),
            'reference' => 'FA-' . now()->year . '-' . fake()->unique()->numberBetween(1, 9999),
            'total_ht' => fake()->randomFloat(2, 0, 50000),
            'total_vat' => fake()->randomFloat(2, 0, 10000),
            'total_ttc' => fake()->randomFloat(2, 0, 60000),
            'issued_at' => fake()->date(),
            'due_at' => fake()->date(),
            'paid_at' => fake()->date(),
            'payment_reference' => fake()->sentence(),
            'notes' => fake()->sentence(),
        ];
    }
}
