<?php

namespace Database\Seeders;

use App\Models\Occupation;
use Illuminate\Database\Seeder;

class UccupationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->base()->each(fn ($ouccupation) => Occupation::create($ouccupation));
    }

    protected function base(): \Illuminate\Support\Collection
    {
        return collect([
            ['name' => 'Design', 'slug' => 'design', 'status' => 1],
            ['name' => 'Math', 'slug' => 'math', 'status' => 1],
            ['name' => 'Science', 'slug' => 'science', 'status' => 1],
            ['name' => 'Language', 'slug' => 'language', 'status' => 1],
            ['name' => 'Health & Fitness', 'slug' => 'health_fitness', 'status' => 1],
            ['name' => 'Lifestyle', 'slug' => 'lifestyle', 'status' => 1],
            ['name' => 'Marketing', 'slug' => 'marketing', 'status' => 1],
            ['name' => 'Management', 'slug' => 'management', 'status' => 1],
            ['name' => 'Web Development', 'slug' => 'web_development', 'status' => 1],
            ['name' => 'Mobile Development', 'slug' => 'mobile_development', 'status' => 1],
        ]);
    }
}
