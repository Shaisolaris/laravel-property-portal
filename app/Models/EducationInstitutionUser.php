<?php

namespace App\Models;

use Database\Factories\EducationInstitutionUserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationInstitutionUser extends Model
{
    use HasFactory;

    public function institution(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(EducationInstitutionList::class, 'education_institution_list_id');
    }

    protected static function newFactory(): EducationInstitutionUserFactory
    {
        return EducationInstitutionUserFactory::new();
    }
}
