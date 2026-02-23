<?php

use App\Models\AcademicSession;
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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_number')->unique();
            $table->foreignId('applicant_id')->constrained()->cascadeOnDelete();
            $table->foreignId('available_programme_id')
                    ->constrained()->cascadeOnDelete();
            $table->foreignId('application_form_id')->constrained();
            $table->foreignIdFor(AcademicSession::class, 'session_id')->constrained();
            $table->enum('status', ['draft', 'submitted', 'under_review', 'admitted', 'rejected', 'cancelled'])->default('draft');
            $table->timestamp('submitted_at')->nullable();
            $table->unique(['applicant_id', 'available_programme_id'], 'unique_applicant_programme');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
