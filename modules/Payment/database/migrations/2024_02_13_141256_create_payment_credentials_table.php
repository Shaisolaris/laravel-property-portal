<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('payment_credentials', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->string('card_number');
            $table->string('card_holder_name');
            $table->string('expiry_month');
            $table->string('expiry_year');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_credentials');
    }
};
