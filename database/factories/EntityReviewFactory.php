<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\EntityReview;
use Illuminate\Support\Carbon;
use App\Enums\EntityReviewStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntityReviewFactory extends Factory
{
    protected $model = EntityReview::class;


    public function definition(): array
    {
        return [
            'rate' => rand(1, 5),
            'text' => fake()->text(),
            'user_id' => User::inRandomOrder()->value('id'),
            'status' => EntityReviewStatusEnum::Published()->value,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
    }
}
