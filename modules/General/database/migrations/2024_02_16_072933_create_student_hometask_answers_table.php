<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('student_homework_answers', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->foreignId('homework_id')
                ->constrained('student_homeworks')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->morphs('model');
            $table->morphs('question');

            $table->json('answer');
            $table->decimal('point');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_homework_answers');
    }
};
