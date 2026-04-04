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
        Schema::create('estimate_lines', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')->constrained()->cascadeOnDelete();

            $table->foreignId('estimate_room_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('supply_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->integer('quantity')->default(1);

            $table->integer('position')->default(0);

            $table->string('label');

            $table->decimal('unit_cost', 10, 2)->nullable();
            $table->decimal('unit_price', 10, 2)->nullable();

            $table->decimal('labor_cost', 10, 2)->nullable();
            $table->decimal('labor_price', 10, 2)->nullable();

            $table->foreignId('vat_rate_id')
                ->constrained()
                ->restrictOnDelete();

            $table->text('description_override')->nullable();

            $table->timestamps();

            $table->index('estimate_room_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimate_lines');
    }
};
