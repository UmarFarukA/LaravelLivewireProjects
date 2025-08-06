<?php

use App\Models\AlumniClass;
use App\Models\House;
use App\Models\Qualification;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('lname');
            $table->string('othernames');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->unique();
            $table->string('photo_path')->nullable();
            $table->tinyInteger('role')->default(1); //1-Alumin, 2-Admin
            $table->foreignIdFor(AlumniClass::class, "alumni_class_id")->nullable();
            $table->foreignIdFor(House::class,"house_id")->nullable();
            $table->string("alumni_rank")->nullable();
            $table->string('prefect_rank')->nullable();
            $table->string('institution_name')->nullable();
            $table->foreignIdFor(Qualification::class,'qualification_id')->nullable();
            $table->string('occupation')->nullable();
            $table->string('organization')->nullable();
            $table->string('rank_in_org')->nullable();
            $table->tinyInteger('profile_status')->default(0); //0-Inactive, 1-active
            $table->timestamps();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->rememberToken();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
