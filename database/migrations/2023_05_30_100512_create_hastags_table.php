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
        Schema::create('hastags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create("hastag_product", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("hastag_id")
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
            $table
                ->foreignId("product_id")
                ->unsigned()
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
            $table->unique(["hastag_id", "product_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hastags');
    }
};
