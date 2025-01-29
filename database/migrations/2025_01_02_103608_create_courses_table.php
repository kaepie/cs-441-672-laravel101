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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_number');
            $table->string('code');
            $table->string('thai_name');
            $table->string('eng_name');
            $table->text('thai_description')->nullable();
            $table->text('eng_description')->nullable();
            $table->integer('credit');
            $table->integer('lecture_hours');
            $table->integer('practice_hours');
            $table->integer('self_study_hours');
            $table->string('condition')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
