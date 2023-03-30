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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('medicine_id')->unique()->nullable();
            $table->string('name');
            $table->string('description');
            $table->string('price');
            $table->integer('quantity')->default(0)->nullable();
            $table->string('image')->nullable();
            $table->foreignId('category_id')->constrained('medicine_categories')->onDelete('cascade');
            $table->enum('status', ['Available', 'Not Available'])->default('Available');
            $table->date('expiry_date')->nullable();
            $table->date('manufacture_date')->nullable();
            $table->string('manufacture_company');
            $table->string('generic_name')->nullable();
            $table->string('dosage')->nullable();
            $table->string('side_effects')->nullable();
            $table->string('precautions')->nullable();
            $table->enum('storage', ['Room Temperature', 'Refrigerated', 'Frozen'])->default('Room Temperature');
            $table->enum('how_to_use', ['Oral', 'Topical', 'Inhalation', 'Injection'])->default('Oral');
            $table->string('how_it_works')->nullable();
            $table->string('other_information')->nullable();
            $table->string('composition')->nullable();
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
        Schema::dropIfExists('medicines');
    }
};
