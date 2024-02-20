<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('education_institution_course_benefits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('education_institution_course_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('education_institution_course_benefits');
    }
};
