<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\EntityReview;
use Illuminate\Database\Seeder;
use App\Enums\User\UserRoleEnum;
use Modules\School\app\Models\EiClass;
use Modules\General\app\Models\EducationInstitution;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        EntityReview::factory()->count(1)->create([
            'model_type' => (new EiClass())->getMorphClass(),
            'model_id' => EiClass::inRandomOrder()->value('id'),
        ]);

        EntityReview::factory()->count(1)->create([
            'model_type' => (new User())->getMorphClass(),
            'model_id' => User::role(UserRoleEnum::Instructor()->value)->inRandomOrder()->value('id'),
        ]);

        EntityReview::factory()->count(1)->create([
            'model_type' => (new EducationInstitution())->getMorphClass(),
            'model_id' => EducationInstitution::inRandomOrder()->value('id'),
        ]);


        $users = User::withoutRole(UserRoleEnum::Instructor()->value)->get();

        foreach ($users as $user) {
            EntityReview::factory()->count(1)->create([
                'model_type' => $user->getMorphClass(),
                'model_id' => $user->id,
            ]);
        }
    }
}
