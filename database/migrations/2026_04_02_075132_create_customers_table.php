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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();

            $table->string('email')->nullable();

            $table->string('address')->nullable();
            $table->string('complementary_address')->nullable();
            $table->string('postal_code', 5)->nullable();
            $table->string('city')->nullable();

            $table->string('phone')->nullable();

            $table->softDeletes();

            $table->timestamps();

            $table->unique(['company_id', 'email']);

            $table->index('company_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
