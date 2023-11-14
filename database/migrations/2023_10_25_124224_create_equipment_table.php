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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('custom_id')->unique();
            $table->string('item_description');
            $table->string('supplier');
            $table->string('unit');
            $table->string('status')->nullable()->default('Out for service');
            $table->string('location');
            $table->date('acquisition')->nullable();
            $table->decimal('amount', 10,2);
            $table->string('remarks');
            $table->string('project')->nullable();
            $table->string('assignee')->nullable();
            $table->timestamp('modified')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
