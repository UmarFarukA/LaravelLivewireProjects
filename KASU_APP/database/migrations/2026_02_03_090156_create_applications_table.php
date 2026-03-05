<?php

use App\Models\AcademicSession;
use App\Models\AvailableProgramme;
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
            $table->string('application_number')->nullable();
            $table->integer('applicant_id')->nullable(false);
            $table->integer('available_programme_id')->nullable(false);
            $table->integer('application_form_id')->nullable(false);
            $table->string('academic_session');
            $table->enum('status', ['draft', 'submitted', 'under_review', 'admitted', 'rejected', 'cancelled'])->default('draft');
            $table->timestamp('submitted_at')->nullable();
            // $table->unique(['applicant_id', 'available_programme_id'], 'unique_applicant_programme');
            $table->index('applicant_id');
            $table->index('available_programme_id');
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
