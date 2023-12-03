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
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('email');
            $table->string('mobile_number');
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
            $table->string('passport')->nullable(); // Assuming a file path is stored, you might want to use a file storage system.
            $table->string('guardian_name');
            $table->string('guardian_phone_number');
            $table->string('emergency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boards');
    }
};
