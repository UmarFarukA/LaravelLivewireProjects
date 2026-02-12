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
        Schema::create('application_stages', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // Bio Data, Payment, O-Level, Referees
            $table->string('slug')->unique(); // programme-selection, payment, bio-data, parent-guardian-referee, o-level, a-level, attestation
            $table->text('description')->nullable();
            $table->tinyInteger('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_stages');
    }
};
