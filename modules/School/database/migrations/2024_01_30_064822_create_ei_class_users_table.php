<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('ei_class_users', function (Blueprint $table) {
            $table->id();

            $table->foreignId('class_id')
                ->constrained('ei_classes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ei_class_users');
    }
};
