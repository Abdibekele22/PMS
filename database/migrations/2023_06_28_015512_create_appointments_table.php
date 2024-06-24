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
  
            Schema::create('appointments', function (Blueprint $table) {
                $table->id();
                $table->string('patient_name');
                $table->string('mrn');
                $table->integer('contact_details');
                $table->date('date');
                $table->time('time');
                $table->text('description');
                $table->string('appointed_to');
                $table->string('status')->default('Active');
                $table->timestamps();
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
