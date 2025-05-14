<?php

use App\Models\Products;
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
                    ->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Products::class, 'product_id')
                    ->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->float('amount_paid');
            // $table->float('total_amount_paid')->nullable(true);
            $table->tinyInteger('payment_type')->default(0); //1-installment, 2-full payment
            $table->tinyInteger('status')->default(0); // 0-pending, 1-successful, 2-failed
            $table->date('due_date');
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
