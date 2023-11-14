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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('item_no')->unique();
            $table->string('item_description');
            $table->string('unit'); //unit of measurement
            $table->integer('available_stocks')->nullable()->default(0);
            $table->decimal('amount', 10,2);
            $table->string('status')->nullable()->default('On order');
            $table->string('location');
            $table->timestamp('modified')->default(now());
            $table->string('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
