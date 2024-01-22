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
        Schema::create('education_institution_users', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->foreignId('education_institution_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('founder_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_institution_users');
    }
};
