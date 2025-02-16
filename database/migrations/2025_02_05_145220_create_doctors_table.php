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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('gender')->nullable();
            $table->string('specialization');
            $table->string('license_number')->unique();
            $table->text('academic_qualifications')->nullable();
            $table->integer('years_experience')->nullable();
            $table->text('training_courses')->nullable();
            $table->string('professional_certificate')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
