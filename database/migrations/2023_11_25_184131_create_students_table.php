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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('email')->unique();
            $table->string('mobile_number')->unique();
            $table->string('gender');
            $table->string('zip');
            $table->integer('level');
            $table->string('university');
            $table->string('course');
            $table->string('address_type');
            $table->string('nationality');
            $table->string('state');
            $table->string('district');
            $table->integer('block_number');
            $table->integer('ward_number');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('grandfather_name');
            $table->string('spouse_name')->nullable();
            $table->string('father_in_law_name')->nullable();
            $table->string('mother_in_law_name')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
