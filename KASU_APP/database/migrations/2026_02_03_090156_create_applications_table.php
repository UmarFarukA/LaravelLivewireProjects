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
            $table->foreignId('programme_id')->constrained();
            $table->foreignId('application_form_id')->constrained();
            $table->foreignIdFor(AcademicSession::class, 'session_id')->constrained();
            $table->enum('status', ['draft', 'submitted', 'shortlisted', 'rejected', 'admitted'])->default('draft');
            $table->timestamp('submitted_at')->nullable();
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
