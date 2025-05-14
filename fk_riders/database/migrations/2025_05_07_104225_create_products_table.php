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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('description');
            $table->string('features');
            $table->tinyInteger('condition')->default('0'); // 0-Used, 1-New
            $table->float('price')->nullable(false);
            $table->tinyInteger('status')->default(1); // 0-Out of stock, 1-In stock, 2-Coming Soon
            $table->string('photo')->nullable(false);
            $table->integer('quantity')->nullable(false);
            $table->float('min_deposit')->nullable(false);
            $table->integer('max_duration')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
