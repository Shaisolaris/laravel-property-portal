<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Payment\app\Enums\ChargeBalanceStatusEnum;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();

            $table->string('charge_id');
            $table->string('payment_intent_id');
            $table->string('checkout_session_id');
            $table->string('payment_method_id');

            $table->string('status', 30);
            $table->string('balance_status', 30)->default(ChargeBalanceStatusEnum::Pending()->value);

            $table->string('balance_transaction', 100);

            $table->decimal('amount', 20, 4);
            $table->decimal('commission', 20, 4)->default(0);
            $table->decimal('commission_percent')->default(0);

            $table->json('payment_method_details');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('charges');
    }
};
