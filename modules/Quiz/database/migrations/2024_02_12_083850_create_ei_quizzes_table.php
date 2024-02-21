<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('ei_quizzes', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('ei_id')
                ->constrained('education_institutions')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('lecture_id')
                ->constrained('ei_section_lectures')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->string('name');
            $table->string('language');
            $table->string('grade');
            $table->string('grade_passing_score');
            $table->text('description');

            $table->tinyInteger('pass_mark');
            $table->tinyInteger('duration_minutes')->default(10);
            $table->tinyInteger('number_attempts')->default(1);
            $table->decimal('points_no_answer')->default(0);
            $table->decimal('points_wrong_answer')->default(0);

            $table->timestamp('start_work_datetime');
            $table->timestamp('end_work_datetime');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ei_quizzes');
    }
};
