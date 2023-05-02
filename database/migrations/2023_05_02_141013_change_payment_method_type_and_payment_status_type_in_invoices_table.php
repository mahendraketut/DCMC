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
        Schema::table('invoices', function (Blueprint $table) {
            $table->string('transaction_status')->default('unpaid')->after('payment_status');
            $table->string('transaction_method')->default('cash')->after('payment_method');
            $table->string('transaction_id')->nullable()->after('transaction_method');
            $table->string('payment_code')->nullable()->after('transaction_id');
            $table->string('payment_link')->nullable()->after('payment_code');
            $table->string('pdf_link')->nullable()->after('payment_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            //
        });
    }
};
