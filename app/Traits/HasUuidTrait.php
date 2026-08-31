<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

trait HasUuidTrait
{
    use HasUuids;


    public function uniqueIds(): array
    {
        return ['uuid'];
    }


    public function getRouteKeyName(): string
    {
        return 'uuid';
    }
}
