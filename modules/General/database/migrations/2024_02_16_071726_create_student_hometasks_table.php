<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\General\app\Enums\StudentHomeworkStatusEnum;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('student_homeworks', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->morphs('model');
            $table->string('status')->default(StudentHomeworkStatusEnum::Expected()->value);
            $table->string('sub_status')->nullable();
            $table->tinyInteger('attempts')->default(0);

            $table->timestamp('start_work_datetime');
            $table->timestamp('end_work_datetime');

            $table->timestamp("started_at")->nullable();
            $table->timestamp("finished_at")->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_homeworks');
    }
};
