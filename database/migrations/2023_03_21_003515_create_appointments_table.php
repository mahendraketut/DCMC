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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_id')->unique();
            $table->foreignId('patient_id')->constrained('users');
            $table->foreignId('doctor_id')->constrained('users');
            $table->foreignId('schedule_id')->constrained('schedule');
            $table->enum('status', ['Pending', 'Approved', 'Rejected', 'Cancelled', 'Waiting', 'Under Examination', 'Completed']);
            $table->enum('clinic_type', ['Reservation', 'Emergency']);
            $table->date('appointment_date')->nullable();
            $table->time('appointment_time')->nullable();
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
        Schema::dropIfExists('appointments');
    }
};
