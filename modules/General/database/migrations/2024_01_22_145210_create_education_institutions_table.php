<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\General\app\Models\EducationInstitutionType;
use App\Enums\EducationInstitutions\EducationInstitutionStatusEnum;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('education_institutions', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->default(EducationInstitutionStatusEnum::Active()->value);
            $table->foreignIdFor(EducationInstitutionType::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('education_institutions');
    }
};
