<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('price_rules', function (Blueprint $table) {
            $table->id();

            $table->foreignId('supply_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('project_type_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('vat_rate_id')
                ->constrained()
                ->restrictOnDelete();

            $table->decimal('unit_price', 10, 2)->nullable();

            $table->decimal('labor_cost', 10, 2)->nullable();
            $table->decimal('labor_price', 10, 2)->nullable();

            $table->timestamps();

            $table->unique(['supply_id', 'project_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_rules');
    }
};
