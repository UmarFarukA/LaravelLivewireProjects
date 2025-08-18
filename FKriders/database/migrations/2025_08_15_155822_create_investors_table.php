<?php

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
        Schema::create('investors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, "user_id")
                    ->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('amount_invested');
            $table->integer('duration');
            $table->tinyInteger('payment_status')->default(0); // 0:not-completed, 1:completed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investors');
    }
};
