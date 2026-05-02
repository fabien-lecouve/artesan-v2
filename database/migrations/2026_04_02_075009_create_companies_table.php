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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            $table->foreignId('insurance_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('name');

            $table->string('email')->unique();

            $table->string('siret')->nullable();
            $table->string('rm_number')->nullable();
            $table->string('vat_number')->nullable();

            $table->string('logo_path')->nullable();

            $table->string('address')->nullable();
            $table->string('complementary_address')->nullable();
            $table->string('postal_code', 5)->nullable();
            $table->string('city')->nullable();

            $table->string('phone')->nullable();

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
