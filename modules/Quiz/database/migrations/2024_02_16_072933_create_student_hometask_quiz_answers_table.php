<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('student_homework_quiz_answers', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->foreignId('homework_id')
                ->constrained('student_homeworks')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('quiz_id')
                ->nullable()
                ->constrained('ei_quizzes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('question_id')
                ->constrained('ei_quiz_questions')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('quiz_type_id')
                ->constrained('ei_quiz_types')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->decimal('point');
            $table->string('is_correct')->nullable();

            $table->json('correct_answers')->nullable();
            $table->json('current_answers')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_homework_quiz_answers');
    }
};
