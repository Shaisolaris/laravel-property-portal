<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('education_institution_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('education_institution_categories');
            $table->string('category');
            $table->timestamps();
        });

        Schema::table('education_institution_courses', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->constrained('education_institution_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_institution_categories');
    }
};
