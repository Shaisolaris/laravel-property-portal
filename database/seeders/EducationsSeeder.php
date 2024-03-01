<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Enums\User\UserRoleEnum;
use Modules\School\app\Models\EiClass;
use Modules\General\app\Models\EiSection;
use Modules\School\app\Models\EiClassUser;
use Modules\School\app\Models\EiClassSubject;
use Modules\General\app\Models\EiSectionLecture;
use Modules\General\app\Models\EducationInstitution;
use Modules\General\app\Models\EducationInstitutionUser;
use Modules\General\app\Models\EducationInstitutionType;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\General\app\Models\EducationInstitutionCategory;
use App\Enums\EducationInstitutions\EducationInstitutionTypeEnum;
use App\Enums\EducationInstitutions\EiStatusEnum;
use Modules\Academy\app\Models\EducationInstitutionCourseRefersInstitution;

class EducationsSeeder extends Seeder
{
    public function run(): void
    {
        $this->setupTypeInstitutions();
        $this->createParentCategories();

        EducationInstitutionCategory::factory()->count(100)->create();
        EducationInstitution::factory()->count(User::count())->create();
        EducationInstitutionCourse::factory()->count(50)->create();
        EducationInstitutionCourseRefersInstitution::factory()->count(1000)->create();

        Tag::factory()->count(500)->create();

        $this->bindBaseUsersToInstitution();

        $this->createClassesAndSubjects();

        $this->bindBaseUsersToClass();

        $this->createModelSectionAndLecture();
    }

    protected function createClassesAndSubjects(): void
    {
        EiClass::factory()->count(100)->create();
        EiClassSubject::factory()->count(50)->create();
    }

    private function createModelSectionAndLecture(): void
    {
        EducationInstitutionCourse::all()->each(function ($course) {
            $sections = EiSection::factory()->count(10)->create([
                'model_type' => $course->getMorphClass(),
                'model_id' => $course->id
            ]);

            $sections->each(function ($section) {
                EiSectionLecture::factory()->count(10)->create([
                    'section_id' => $section->id
                ]);
            });
        });

        EiClassSubject::all()->each(function ($subject) {
            $sections = EiSection::factory()->count(10)->create([
                'model_type' => $subject->getMorphClass(),
                'model_id' => $subject->id
            ]);

            $sections->each(function ($section) {
                EiSectionLecture::factory()->count(10)->create([
                    'section_id' => $section->id
                ]);
            });
        });
    }

    protected function setupTypeInstitutions(): void
    {
        collect(EducationInstitutionTypeEnum::toValues())->each(function ($institute) {
            EducationInstitutionType::create([
                'name' => $institute,
                'status' => $institute !== 'school'
                    ? EiStatusEnum::Disabled()->value
                    : EiStatusEnum::Active()->value,
            ]);
        });
    }

    protected function createParentCategories(): void
    {
        for ($i = 1; $i <= 4; $i++) {
            $categories[$i] = ['parent_id' => null, 'category' => ucfirst(fake()->unique()->title)];
        }

        EducationInstitutionCategory::factory()->createMany($categories);
    }

    protected function bindBaseUsersToInstitution(): void
    {
        User::role(UserRoleEnum::Student()->value)->each(function ($user) {
            EducationInstitutionUser::factory()->createOne([
                'education_institution_id' => $this->getInstitutionTypeId($user),
                'user_id' => $user->id,
            ]);
        });

        User::role(UserRoleEnum::Instructor()->value)->each(function ($user) {
            EducationInstitutionUser::factory()->createOne([
                'education_institution_id' => $this->getInstitutionTypeId($user),
                'user_id' => $user->id,
            ]);
        });

        User::role(UserRoleEnum::Organizer()->value)->each(function ($user) {
            EducationInstitutionUser::factory()->createOne([
                'education_institution_id' => $this->getInstitutionTypeId($user),
                'user_id' => $user->id,
            ]);
        });
    }

    private function bindBaseUsersToClass(): void
    {
        $classId = EiClass::inRandomOrder()->value('id');

        User::role(UserRoleEnum::Student()->value)->each(function ($user) use ($classId) {
            if ($user->institution_type === EducationInstitutionTypeEnum::School()->value) {
                EiClassUser::factory()->createOne([
                    'class_id' => $classId,
                    'user_id' => $user->id,
                ]);
            }
        });

        User::role(UserRoleEnum::Instructor()->value)->each(function ($user) use ($classId) {
            if ($user->institution_type === EducationInstitutionTypeEnum::School()->value) {
                EiClassUser::factory()->createOne([
                    'class_id' => $classId,
                    'user_id' => $user->id,
                ]);
            }
        });

        User::role(UserRoleEnum::Organizer()->value)->each(function ($user) use ($classId) {
            if ($user->institution_type === EducationInstitutionTypeEnum::School()->value) {
                EiClassUser::factory()->createOne([
                    'class_id' => $classId,
                    'user_id' => $user->id,
                ]);
            }
        });
    }

    protected function getInstitutionTypeId($user): mixed
    {
        if (Str::contains($user->email, EducationInstitutionTypeEnum::School()->label)) {
            return $this->getInstitutionIdByType(EducationInstitutionTypeEnum::School()->value);
        }

        if (Str::contains($user->email, EducationInstitutionTypeEnum::Academy()->label)) {
            return $this->getInstitutionIdByType(EducationInstitutionTypeEnum::Academy()->value);
        }

        return EducationInstitutionType::inRandomOrder()->value('id');
    }

    protected function getInstitutionIdByType($type): mixed
    {
        return EducationInstitutionType::whereName($type)->value('id');
    }
}
