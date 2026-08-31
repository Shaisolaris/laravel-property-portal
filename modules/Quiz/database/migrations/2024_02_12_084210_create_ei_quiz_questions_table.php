<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('ei_quiz_questions', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->foreignId('quiz_type_id')
                ->constrained('ei_quiz_types')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('quiz_id')
                ->constrained('ei_quizzes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->text('question');
            $table->decimal('point');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ei_quiz_questions');
    }
};
