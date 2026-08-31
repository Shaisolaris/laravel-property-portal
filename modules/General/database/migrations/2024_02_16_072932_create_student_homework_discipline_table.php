<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('student_homework_discipline', function (Blueprint $table) {
            $table->id();

            $table->morphs('model');
            $table->morphs('parent_model');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_homework_discipline');
    }
};
