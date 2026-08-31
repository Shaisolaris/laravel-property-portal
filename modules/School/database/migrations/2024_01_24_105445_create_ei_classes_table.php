<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('ei_classes', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->foreignId('ei_id')
                ->constrained('education_institutions')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->string('name');
            $table->string('slug');
            $table->string('status');
            $table->decimal('price', 20, 4);
            $table->decimal('hourly_rate', 20);
            $table->tinyInteger('capacity');
            $table->tinyInteger('duration_lesson');
            $table->tinyInteger('gradation_age_from');
            $table->tinyInteger('gradation_age_to');
            $table->string('language');
            $table->text('description');

            $table->date('start_date_at');
            $table->date('end_date_at');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ei_classes');
    }
};
