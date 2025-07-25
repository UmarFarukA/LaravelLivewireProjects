<?php

use App\Models\Brand;
use App\Models\Category;
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
        Schema::create('tricycles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class, 'category_id')
                    ->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Brand::class, 'brand_id')
                    ->constrained()->cascadeOnDelete();
            $table->text('description')->nullable();
            $table->string('color');
            $table->string('model_number');
            $table->string('amount');
            $table->string('photo')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tricycles');
    }
};
