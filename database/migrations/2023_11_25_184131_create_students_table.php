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
            $table->string('email')->unique();
            $table->string('nationality')->nullable();
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('marital_status');
            $table->text('address');
            $table->string('mother_name');
            $table->string('parent_guardian_phone');
            $table->text('parent_guardian_address');
            $table->string('education_level');
            $table->string('course_of_study')->nullable();
            $table->string('university')->nullable();
            $table->string('completion_status');
            $table->string('job_title')->nullable();
            $table->string('industry')->nullable();
            $table->string('business_nature')->nullable();
            $table->string('career_path');
            $table->longText('statement');
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
