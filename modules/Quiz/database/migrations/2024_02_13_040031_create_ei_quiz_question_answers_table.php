<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('ei_quiz_question_answers', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->foreignId('quiz_question_id')
                ->constrained('ei_quiz_questions')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->text('answer');
            $table->boolean('is_correct')->default(false);
            $table->decimal('point')->nullable();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ei_quiz_question_answers');
    }
};
