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
        Schema::create('purchase_order_materials', function (Blueprint $table) {
            $table->id();
            $table->string('order_no')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('location_of_delivery');
            $table->string('delivery_to');
            $table->date('expected_delivery_date');
            $table->string('item_no');
            $table->string('item_description');
            $table->string('amount');
            $table->string('unit_type');
            $table->string('quantity');
            $table->string('total_quantity');
            $table->string('remarks');
            $table->decimal('total_amount', 10,2);
            $table->enum('status', ['pending', 'Approved', 'Cancelled', 'Delivered', 'Returned'])->default('pending');
            $table->timestamp('ordered_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_order_materials');
    }
};
