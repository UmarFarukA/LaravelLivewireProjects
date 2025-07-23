<?php

use App\Models\Tricycle;
use App\Models\User;
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
        Schema::create('allocations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Tricycle::class,'tricycle_id');
            $table->integer('duration');
            $table->string('model_number');
            $table->string('plate_number');
            $table->string('tricycle_number');
            $table->tinyInteger('status')->default(0); //0-Allocated, 1-Deallocated
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allocations');
    }
};
