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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unsigned()->constrained()->cascadeOnDelete();
            $table->string('order_email');
            $table->string('order_name');
            $table->string('order_adress');
            $table->string('order_bus')->nullable();
            $table->string('order_postcode');
            $table->string('order_city');
            $table->string('order_cupon')->nullable();
            $table->string('order_status')->default('unpaid');
            $table->integer('order_taxes');
            $table->integer('order_total');
            $table->boolean('shipped')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
