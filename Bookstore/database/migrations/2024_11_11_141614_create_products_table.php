<?php

use App\Models\Author;
use App\Models\Category;
use App\Models\Supplier;
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
            $table->foreignIdFor(Author::class, "author_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Category::class, "category_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Supplier::class, "supplier_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("title");
            $table->string("description");
            $table->integer("numPages");
            $table->integer("numCopies")->default(1);
            $table->string("cost");
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
