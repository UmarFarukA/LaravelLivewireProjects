<?php

use App\Models\ClassRooms;
use App\Models\School;
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
            $table->integer('school_id')->nullable(false);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('dob');
            $table->string('address');
            $table->string('email')->nullable();
            $table->tinyInteger('status')->default(2); // 1=approved, 2=pending, 0=rejected
            $table->string('parent_name')->nullable();
            $table->string('parent_phone')->nullable();
            $table->string('previous_school')->nullable();
            $table->foreignIdFor(ClassRooms::class, 'classroom_id')
                    ->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
