<?php

use Laravel\Fortify\Fortify;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index()->unique();
            $table->string('stripe_id')->nullable()->index();

            $table->string('email')->unique();
            $table->string('password');

            $table->string('status', 50)->default(\App\Enums\User\UserStatusEnum::Pending()->value);
            $table->string('sub_status', 50)->nullable();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender')->nullable();
            $table->json('languages')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();

            $table->string('address');

            $table->foreignId('country_id')
                ->constrained('countries')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->string('state');
            $table->string('city');
            $table->string('zip_code')->nullable();
            $table->string('timezone')->nullable();
            $table->string('phone')->nullable();
            $table->string('teaching_level')->nullable();
            $table->string('ip')->nullable();

            $table->text('bio')->nullable();
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();

            $table->string('pm_type')->nullable();
            $table->string('pm_last_four', 4)->nullable();

            $table->rememberToken();

            $table->timestamp('birth_at')->nullable();
            $table->timestamp('trial_ends_at')->nullable();

            if (Fortify::confirmsTwoFactorAuthentication()) {
                $table->timestamp('two_factor_confirmed_at')
                    ->after('two_factor_recovery_codes')
                    ->nullable();
            }

            $table->timestamp('email_verified_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
