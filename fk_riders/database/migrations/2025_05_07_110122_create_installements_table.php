<?php

use App\Models\Payments;
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
        Schema::create('installements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Payments::class, 'payment_id')
                    ->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('installment_number');
            $table->date('due_date');
            $table->float('amount')->nullable(false);
            $table->enum('status', ['paid', 'unpaid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installements');
    }
};
