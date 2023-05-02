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
            $table->string('transaction_status')->default('unpaid')->after('payment_status');
            $table->string('transaction_method')->default('cash')->after('payment_method');
            $table->string('transaction_id')->nullable()->after('transaction_method');
            $table->string('payment_code')->nullable()->after('transaction_id');
            $table->string('payment_link')->nullable()->after('payment_code');
            $table->string('pdf_link')->nullable()->after('payment_link');
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
