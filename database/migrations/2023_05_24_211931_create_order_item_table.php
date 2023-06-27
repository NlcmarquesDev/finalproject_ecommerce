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
        Schema::create('order_item', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('order_id')->unsigned()->constrained()->cascadeOnDelete();
            $table->integer('quantity');
            $table->string('product_name');
            $table->string('product_color');
            $table->decimal('product_price', 10, 2)->default(0);
            $table->decimal('product_taxes', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_item');
    }
};
