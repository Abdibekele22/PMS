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
        Schema::create('_vital_sign', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('MRN');
           $table->string('vital')->nullable();
           $table->string('Dept')->nullable();
           $table->string('doctor')->nullable();
           $table->enum('condition',['normal','emergency'])->nullable();
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_vital_sign');
    }
};
