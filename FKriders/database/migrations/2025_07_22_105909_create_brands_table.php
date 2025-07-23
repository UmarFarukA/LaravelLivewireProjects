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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('name')->default(1); //1-TVS, 2-Bajaj, 3-Piaggo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
