<?php

namespace Database\Seeders;

use App\Models\Occupation;
use Illuminate\Database\Seeder;

class OccupationsSeeder extends Seeder
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
        //TODO:: Вроде хотел все статусы, типы и т.д string делать а не int?
        return collect([
            ['name' => 'Design', 'status' => 1],
            ['name' => 'Math', 'status' => 1],
            ['name' => 'Science', 'status' => 1],
            ['name' => 'Language', 'status' => 1],
            ['name' => 'Health & Fitness', 'status' => 1],
            ['name' => 'Lifestyle', 'status' => 1],
            ['name' => 'Marketing', 'status' => 1],
            ['name' => 'Management', 'status' => 1],
            ['name' => 'Web Development', 'status' => 1],
            ['name' => 'Mobile Development', 'status' => 1],
        ]);
    }
}
