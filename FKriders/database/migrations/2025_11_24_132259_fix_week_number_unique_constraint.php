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
        Schema::table('payments', function (Blueprint $table) {
            // Drop wrong constraint
            $table->dropUnique('payments_week_number_unique');

            // Add correct constraint (allocation + week number)
            $table->unique(['allocation_id', 'week_number'], 'payments_allocation_week_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropUnique('payments_allocation_week_unique');

            $table->unique('week_number', 'payments_week_number_unique');
        });
    }
};
