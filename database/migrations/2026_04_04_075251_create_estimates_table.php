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
        Schema::create('estimates', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')->constrained()->cascadeOnDelete();

            $table->foreignId('estimate_status_id')
                ->constrained()
                ->restrictOnDelete();

            $table->foreignId('project_id')
                ->constrained()
                ->restrictOnDelete();

            $table->string('reference');

            $table->string('label')->nullable();
            $table->text('notes')->nullable();

            $table->date('issued_at')->nullable();
            $table->date('valid_until')->nullable();

            $table->decimal('total_ht', 10, 2)->default(0);
            $table->decimal('total_vat', 10, 2)->default(0);
            $table->decimal('total_ttc', 10, 2)->default(0);

            $table->softDeletes();

            $table->timestamps();

            $table->unique(['company_id', 'reference']);

            $table->index('company_id');
            $table->index('project_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimates');
    }
};
