<?php

namespace App\Facades;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Facade;
use Modules\School\app\Models\EiClass;

class MorphChoice extends Facade
{
    public static function switchRoute(mixed $morphModel): string
    {
        $routeMappings = [
            EiClass::class => route('school.class.edit', $morphModel->uuid)
        ];

        if ($morphModel && Arr::exists($routeMappings, $morphModel->getMorphClass())) {
            return $routeMappings[$morphModel->getMorphClass()];
        }

        return '';
    }


    protected static function getFacadeAccessor(): string
    {
        return 'MorphChoice';
    }
}
