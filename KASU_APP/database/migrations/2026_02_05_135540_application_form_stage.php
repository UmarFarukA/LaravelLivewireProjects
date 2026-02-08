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
        Schema::create('application_form_stage', function (Blueprint $table) {
            $table->foreignId('application_form_id')->constrained()->cascadeOnDelete();
            $table->foreignId('application_stage_id')->constrained()->cascadeOnDelete();
            $table->integer('order');
            $table->primary(['application_form_id', 'application_stage_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
