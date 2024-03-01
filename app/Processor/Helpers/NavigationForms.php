<?php

namespace App\Processor\Helpers;

class NavigationForms
{
    public function steps($user)
    {
        return $this->{$user->institution_type}();
    }

    protected function school(): array
    {
        $steps = $this->list()->reject(fn ($step) => $step['number'] < 3);

        return $steps->each(function ($step) {
            if($step['number'] == 3) {
                $step['name'] = 'Subject content';
            }
            if($step['number'] == 4) {
                $step['name'] = 'Assignments & Quizzes';
            }
        })->values()->all();
    }

    protected function academy(): \Illuminate\Support\Collection
    {
        return $this->list();
    }

    protected function list(): \Illuminate\Support\Collection
    {
        return collect([
            [
                'number' => 1,
                'slug' => 'base_information',
                'name' => 'Basic Information',
                'component' => 'BasicInformation',
            ],
            [
                'number' => 2,
                'slug' => 'advance_information',
                'name' => 'Advance Information',
                'component' => 'AdvanceInformation',
            ],
            [
                'number' => 3,
                'slug' => 'content',
                'name' => 'Curriculum',
                'component' => 'Content',
            ],
            [
                'number' => 4,
                'slug' => 'assignments',
                'name' => 'Assignments',
                'component' => 'Assignments',
            ],
//            [
//                'number' => 5,
//                'slug' => 'publish_course',
//                'name' => 'Publish Course',
//                'component' => 'PublishCourse',
//            ]
        ]);
    }
}
