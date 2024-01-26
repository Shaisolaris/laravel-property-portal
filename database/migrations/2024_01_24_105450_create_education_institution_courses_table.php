<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('education_institution_courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->string('language');
            $table->text('description');
            $table->string('duration_minutes');
            $table->string('time');
            $table->timestamps();
        });

        Schema::create('education_institution_course_refers_institutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institution_id')->constrained('education_institution_lists')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('course_id')->constrained('education_institution_courses')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('education_institution_courses');
    }
};
