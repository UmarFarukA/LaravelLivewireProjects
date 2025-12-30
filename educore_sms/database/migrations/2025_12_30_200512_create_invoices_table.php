<?php

use App\Models\FeeStructure;
use App\Models\Student;
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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id');
            $table->foreignIdFor(FeeStructure::class, 'fee_structure_id');
            $table->float('amount');
            $table->tinyInteger('status')->default(0); //0-Unpaid, 1-paid, 2-partial
            $table->date('due_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
