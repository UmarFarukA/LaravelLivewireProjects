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
        Schema::create('o_level_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('exam_type');     // WAEC, NECO, NABTEB
            $table->string('exam_number');
            $table->year('exam_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('o_level_results');
    }
};
