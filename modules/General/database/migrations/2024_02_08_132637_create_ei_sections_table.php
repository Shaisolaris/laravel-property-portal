<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    
    public function up(): void
    {
        Schema::create('ei_sections', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();
            $table->string('slug');
            $table->string('name');
            $table->morphs('model');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('ei_sections');
    }
};
