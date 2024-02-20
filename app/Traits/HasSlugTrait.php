<?php

namespace App\Traits;

use Illuminate\Support\Str;

/** Trait for create slug with set field name for create slug */
trait HasSlugTrait
{
    protected static function boot(): void
    {
        parent::boot();

        static::saving(function ($model) {
            $field = self::$fieldForCreateSlug ?? 'name';

            if ($model->isDirty($field)) {
                $model->slug = Str::slug($model[$field]);
            }
        });

        static::updating(function ($model) {
            $field = self::$fieldForCreateSlug ?? 'name';

            if ($model->isDirty($field)) {
                $model->slug = Str::slug($model[$field]);
            }
        });
    }
}
