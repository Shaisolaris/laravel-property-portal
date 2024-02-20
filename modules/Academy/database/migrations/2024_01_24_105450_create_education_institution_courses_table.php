<?php

use App\Enums\EducationInstitutions\EducationInstitutionCourseEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('education_institution_courses', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();
            $table->string('title');
            $table->string('type');
            $table->string('language');
            $table->string('status')->default(EducationInstitutionCourseEnum::Draft()->value);
            $table->text('description');
            $table->time('base_duration')->nullable();
            $table->time('advance_duration')->nullable();
            $table->timestamps();
        });

        Schema::create('education_institution_course_refers_institutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institution_id')->constrained('education_institutions')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('course_id')->constrained('education_institution_courses')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('education_institution_courses');
    }
};
