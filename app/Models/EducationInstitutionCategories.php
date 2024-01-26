<?php

namespace App\Models;

use Database\Factories\EducationInstitutionCategoriesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationInstitutionCategories extends Model
{
    use HasFactory;

    protected static function newFactory(): EducationInstitutionCategoriesFactory
    {
        return EducationInstitutionCategoriesFactory::new();
    }
}
