<?php

use App\Models\applications;
use App\Models\School;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(School::class, 'schoold_id');
            $table->foreignIdFor(applications::class, 'applicant_id');
            $table->string('admission_number');
            $table->string('current_class_id');
            $table->tinyInteger('status')->default(1); //1-Active, 2-graduated, 3-withdraw
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
