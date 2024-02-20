<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('ei_assignments', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index()->unique();
            $table->string('name');
            $table->string('slug');
            $table->string('language');
            $table->string('total_score');
            $table->string('passing_score');
            $table->text('description');

            $table->foreignId('lecture_id')->nullable()
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->timestamp('start_work_datetime');
            $table->timestamp('end_work_datetime');

            $table->json('links_to_video')->default('[]');

            $table->morphs('model');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ei_assignments');
    }
};
