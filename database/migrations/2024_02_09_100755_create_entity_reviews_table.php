<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('entity_reviews', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->morphs('model');

            $table->tinyInteger('rate');

            $table->text('text');

            $table->string('status');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('entity_reviews');
    }
};
