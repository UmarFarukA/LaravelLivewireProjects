<?php

use App\Models\AcademicSession;
use App\Models\School;
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
        Schema::create('admissions', function (Blueprint $table) {
             $table->id();
            $table->foreignIdFor(School::class, 'school_id');
            $table->foreignIdFor(Student::class, 'student_id');
            $table->foreignIdFor(AcademicSession::class, 'academic_session_id');
            $table->tinyInteger('status')->default(0); // 0: pending, 1: accepted, 2: rejected
            $table->tinyInteger('approved_by')->nullable(); // user_id of the approver
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
