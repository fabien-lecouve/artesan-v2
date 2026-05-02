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
        Schema::create('template_lines', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')->constrained()->cascadeOnDelete();

            $table->foreignId('template_room_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('supply_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->integer('quantity')->default(1);

            $table->integer('position')->default(0);

            $table->string('label');

            $table->text('description_override')->nullable();

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_lines');
    }
};
