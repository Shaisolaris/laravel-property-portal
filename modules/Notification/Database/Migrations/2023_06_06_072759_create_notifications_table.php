<?php

use App\Enums\NotificationType;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique()->index();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('sender_user_id')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->nullableUuidMorphs('model');
            $table->enum('type', NotificationType::getValues());
            $table->string('text');
            $table->boolean('is_seen')->default(false);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
