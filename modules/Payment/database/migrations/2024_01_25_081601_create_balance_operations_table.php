<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('balance_operations', function (Blueprint $table) {
            $table->id();

            $table->uuid()->unique()->index();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->string('operation', 8);
            $table->string('action', 8);

            $table->decimal('amount', 20, 4);
            $table->decimal('actual_balance', 20, 4);

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('balance_operations');
    }
};
