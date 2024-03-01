<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('student_homeworks', function (Blueprint $table) {
            $table->nullableMorphs('program_model');
        });
    }

    public function down(): void
    {
        Schema::table('student_homeworks', function (Blueprint $table) {
            $table->dropColumn('program_model');
        });
    }
};
