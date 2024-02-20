<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    
    public function up(): void
    {
        Schema::create('ei_section_lectures', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();
            $table->string('name');
            $table->string('slug');
            $table->string('video');
            $table->string('description');
            $table->string('note');
            $table->foreignId('section_id')->constrained('ei_sections')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('ei_section_lectures');
    }
};
