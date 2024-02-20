<?php

namespace Modules\School\database\factories;

use App\Models\User;
use Modules\School\app\Models\EiClass;
use Modules\School\app\Models\EiClassUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class EiClassUserFactory extends Factory
{
    protected $model = EiClassUser::class;

    public function definition(): array
    {
        return [
            'class_id' => EiClass::inRandomOrder()->value('id'),
            'user_id' =>  User::inRandomOrder()->value('id'),
        ];
    }
}
