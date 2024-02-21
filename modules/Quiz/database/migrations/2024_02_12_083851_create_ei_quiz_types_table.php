<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('ei_quiz_types', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->string('name');
            $table->string('value');
            $table->string('type');
            $table->json('html');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ei_quiz_types');
    }
};
