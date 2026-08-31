<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Payment\app\Enums\TransactionStatusEnum;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->string('transaction_id', 15)->unique()->index();

            $table->morphs('model');

            $table->decimal('amount', 20, 4);

            $table->decimal('amount_fee', 20, 4)
                ->nullable()
                ->storedAs('amount - (amount * fee / 100)');

            $table->decimal('fee', 5)->default(0);

            $table->string('status')->default(TransactionStatusEnum::Processing()->value);

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
