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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->string("salary");
            $table->string("requirements");
            $table->string("benefites");
            $table->string("company");
            $table->string("address");
            $table->string("city");
            $table->string("state");
            $table->string("phone");
            $table->string("email");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
