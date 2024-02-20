<?php

namespace App\Models;

use App\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\EntityReviewFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EntityReview extends Model
{
    use HasFactory;
    use HasUuidTrait;

    protected $table = 'entity_reviews';

    protected $fillable = [
        'slug',
        'rate',
        'text',
        'status',
        'user_id',
        'model_id',
        'model_type',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];


    protected static function newFactory(): EntityReviewFactory
    {
        return EntityReviewFactory::new();
    }
}
