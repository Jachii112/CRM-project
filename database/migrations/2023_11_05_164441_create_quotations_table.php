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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticket_id');
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->string('item_number_material')->nullable();
            $table->string('item_name_material')->nullable();
            $table->string('unit_type_material')->nullable();
            $table->integer('quantity_material')->nullable();
            $table->decimal('amount_material', 10, 2)->nullable();
            $table->decimal('total_amount_material', 10, 2)->nullable();
            $table->string('item_number_equipment')->nullable();
            $table->string('item_name_equipment')->nullable();
            $table->string('unit_type_equipment')->nullable();
            $table->integer('quantity_equipment')->nullable();
            $table->decimal('amount_equipment', 10, 2)->nullable();
            $table->decimal('total_amount_equipment', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
