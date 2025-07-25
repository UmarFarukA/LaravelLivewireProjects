<?php

use App\Models\PaymentChannel;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id')
                    ->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Tricycle::class, 'tricycle_id')
                    ->constrained()->cascadeOnDelete();
            $table->foreignIdFor(PaymentChannel::class, 'payment_channel_id')
                    ->constrained()->cascadeOnDelete();
            $table->string('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
