<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('new')->nullable();
            $table->string('ticket_no')->unique()->nullable();
            $table->string('customer_number');
            $table->string('customer_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email_address')->nullable();
            $table->string('technician');
            $table->string('service_type');
            $table->date('appointment_date');
            $table->text('description')->nullable();
            $table->string('priority')->default('high');
            $table->timestamp('issued_date')->default(now());
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
