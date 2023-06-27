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
            $table->text('description');
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('rating')->nullable();
            $table->integer('quantity')->default(10);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create("product_color", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("product_id")
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
            $table
                ->foreignId("color_id")
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
            $table->unique(["product_id", "color_id"]);
        });
        Schema::create("category_product", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("product_id")
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
            $table
                ->foreignId("category_id")
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
            $table->unique(["product_id", "category_id"]);
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
