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
        Schema::create("knowledge_session", function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("venue");
            $table->date("date");
            $table->integer("duration");
            $table->string("resolution");
            $table->tinyInteger("status")->default(0); // 0-completed, 1-upcoming
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("knowledge_session");
    }
};
