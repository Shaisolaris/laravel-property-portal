<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\General\app\Models\EducationInstitution;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('education_institution_users', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(EducationInstitution::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('education_institution_users');
    }
};
