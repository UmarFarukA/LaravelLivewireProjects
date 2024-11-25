<?php

use App\Models\Submission;
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
        Schema::create("comments", function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, "user_id")
                ->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Submission::class, "submission_id")
                ->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("content");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("comments");
    }
};
