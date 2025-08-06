<?php

use App\Models\Allocation;
use App\Models\PaymentChannel;
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
            $table->foreignIdFor(Allocation::class, 'allocation_id')
                    ->constrained()->cascadeOnDelete();
            $table->string("payment_channel")->nullable(false);
            $table->decimal('amount');
            $table->integer('week_number');
            $table->tinyInteger('payment_status')->default(0); //0-pending, 1-paid, 2-failed
            $table->timestamp('paid_at')->nullable();
            $table->date('expected_payment_date')->nullable();
            $table->string('payment_reference')->unique();
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
