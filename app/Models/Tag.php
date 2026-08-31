<?php

namespace App\Models;

use Database\Factories\TagFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends \Spatie\Tags\Tag
{
    use HasFactory;

    protected static function newFactory(): TagFactory|Factory
    {
        return TagFactory::new();
    }
}
