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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unsigned()->constrained()->cascadeOnDelete();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('number')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('adrees2')->nullable();
            $table->tinyInteger('is_primary')->default(1);
            $table->tinyInteger('is_delivery')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
