<?php

namespace Database\Factories;

use DateTimeZone;
use App\Models\User;
use App\Models\Role;
use App\Models\Country;
use Illuminate\Support\Str;
use App\Enums\LanguageEnum;
use Illuminate\Support\Carbon;
use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserGenderEnum;
use App\Enums\User\UserStatusEnum;
use App\Enums\User\UserTeachingLevelEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;


    public function definition(): array
    {
        return [
            'uuid' => fake()->uuid(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$12$OMAHvG1l6HzaaW772cSF.uQZpSPevF.2bXCgLhk5WV2XBhoS48ZuC',
            'teaching_level' => fake()->randomElement(UserTeachingLevelEnum::getLabelsValues())['value'],
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'gender' => fake()->randomElement(UserGenderEnum::getLabelsValues())['value'],
            'languages' => fake()->randomElement(LanguageEnum::getLabelsValues())['value'],
            'address' => fake()->address(),
            'country_id' => Country::inRandomOrder()->value('id'),
            'state' => fake()->word(),
            'city' => fake()->city(),
            'timezone' => fake()->randomElement(DateTimeZone::listIdentifiers()),
            'phone' => fake()->phoneNumber(),
            'ip' => fake()->ipv4(),
            'zip_code' => fake()->ipv4(),
            'bio' => fake()->word(),
            'birth_at' => Carbon::now(),
            'profile_photo_path' => resource_path("assets/images/users/avatar-" . rand(1, 10). ".jpg"),
            'status' => UserStatusEnum::Active()->value,
            'email_verified_at' => Carbon::now(),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }


    public function configured(): Factory|UserFactory
    {
        return $this->afterCreating(function (User $user) {
            $role = Role::whereName(UserRoleEnum::notAdminRoleValues()[rand(0, count(UserRoleEnum::notAdminRoleValues()) - 1)])->first();
            $user->assignRole($role);
        });
    }
}
