<?php

use App\Models\ClassRooms;
use App\Models\School;
use App\Models\Subject;
use App\Models\Term;
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
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(School::class, 'school_id');
            $table->foreignIdFor(Term::class, 'term_id');
            $table->foreignIdFor(Subject::class, 'subject_id');
            $table->foreignIdFor(ClassRooms::class, 'class_room_id');
            $table->string('assessment_type');
            $table->float('max_score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
