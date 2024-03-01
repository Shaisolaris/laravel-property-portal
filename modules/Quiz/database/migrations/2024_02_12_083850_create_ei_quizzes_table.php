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

            $table->foreignId('lecture_id')
                ->constrained('ei_section_lectures')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->morphs('model');

            $table->string('name');
            $table->string('language');
            $table->string('grade');
            $table->text('description');

            $table->integer('total_score');
            $table->integer('pass_mark');
            $table->integer('duration_minutes')->default(10);
            $table->tinyInteger('attempts')->default(1);
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
