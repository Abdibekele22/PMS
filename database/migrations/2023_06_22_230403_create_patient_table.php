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
        Schema::create('patient', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('MRN');
            $table->string('Full_Name')->nullable(false);
            $table->enum('gender',['male','female'])->nullable();
            $table->bigInteger('Age');
           //$table->date('DOB');
            $table->integer('Phone_Number');
            $table->text('Address')->nullable()->default('');
            $table->string('Emergency_CN');
            $table->string('Relationship');
            $table->integer('E_Phone_Number');
            $table->enum('status',['active','pending','3rdoption'])->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
