<?php

namespace App\Traits\General;


use Illuminate\Support\Str;

/** Trait for create slug with set field name for create slug */
trait SlugTrait
{
    protected static function boot(): void
    {
        parent::boot();

        static::saving(function ($model) {
            if ($model->isDirty(self::$fieldForCreateSlug)) {
                $model->slug = Str::slug($model[self::$fieldForCreateSlug]);
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty(self::$fieldForCreateSlug)) {
                $model->slug = Str::slug($model[self::$fieldForCreateSlug]);
            }
        });
    }
}