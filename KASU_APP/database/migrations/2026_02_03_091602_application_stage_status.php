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
        Schema::create('application_stage_status', function (Blueprint $table) {
            $table->foreignId('application_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('application_stage_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->boolean('is_completed')->default(false);
            $table->timestamp('completed_at')->nullable();

            $table->primary(['application_id', 'application_stage_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_stage_status');
    }
};
