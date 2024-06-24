<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
           // $table->unsignedBigInteger('role_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('national_id')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->text('picture')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('emergency')->nullable();
         //   $table->timestamp('email_verified_at')->nullable();
            $table->string('department')->nullable();
            $table->string('medical_degree')->nullable();
            $table->string('biography')->nullable();
     
            $table->rememberToken();
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
