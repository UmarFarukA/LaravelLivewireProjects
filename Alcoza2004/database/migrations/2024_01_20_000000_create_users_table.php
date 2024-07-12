<?php

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
            $table->string('fname');
            $table->string('mname')->nullable(true);
            $table->string('lname');
            $table->string('email')->unique()->nullable(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->unique();
            $table->string('photo')->nullable(true);
            $table->integer('admissionNumber')->nullable(true);
            $table->foreignId('class_id')->references('id')->on('friends_classes')->cascadeOnDelete();
            $table->foreignId('house_id')->references('id')->on('friends_houses')->cascadeOnDelete();
            $table->enum('role',['admin', 'member'])->default('member');
            $table->string('rank')->nullable(true);
            $table->string('password');
            $table->foreignId('state_id')->references('id')->on('states')->cascadeOnDelete();
            $table->foreignId('lg_id')->references('id')->on('local_govts')->cascadeOnDelete();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
