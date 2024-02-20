<?php

namespace Modules\General\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\EducationInstitutionCategoryFactory;

class EducationInstitutionCategory extends Model
{
    use HasFactory;

    protected $table = 'education_institution_categories';

    protected $with = ['parent'];

    protected static function newFactory(): EducationInstitutionCategoryFactory
    {
        return EducationInstitutionCategoryFactory::new();
    }

    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function scopeWithoutParent(Builder $query): Builder
    {
        return $query->whereNotNull('parent_id');
    }
}
