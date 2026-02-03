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
        Schema::create('o_level_subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('o_level_result_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('subject');
            $table->string('grade'); // A1 – F9
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('o_level_subjects');
    }
};
