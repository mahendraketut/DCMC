<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string("invoice_id");
            $table->foreignId('appointment_id')->nullable()->constrained('appointments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('patient_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade');
            $table->string('total');
            $table->string('discount')->nullable();
            $table->string('grand_total');
            $table->string('notes')->nullable();
            $table->string('snap_token')->nullable();
            $table->string('transaction_status')->default('unpaid');
            $table->string('transaction_method')->default('cash');
            $table->string('transaction_id')->nullable();
            $table->string('payment_code')->nullable();
            $table->string('payment_link')->nullable();
            $table->string('pdf_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
