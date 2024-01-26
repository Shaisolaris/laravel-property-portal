<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('education_institution_objects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default(1);
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('education_institution_objects');
    }
};
