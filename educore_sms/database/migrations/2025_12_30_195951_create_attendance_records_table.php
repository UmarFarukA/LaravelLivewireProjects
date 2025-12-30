<?php

use App\Models\Attendance;
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
        Schema::create('attendance_records', function (Blueprint $table) {
             $table->id();
            $table->foreignIdFor(Attendance::class, 'attendance_id');
            $table->foreignIdFor(Student::class, 'student_id');
            $table->tinyInteger('status')->default(1); //1-present, 2-Absent, 0-Late
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_records');
    }
};
