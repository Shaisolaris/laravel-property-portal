<?php

namespace Modules\Quiz\database\seeders;

use Illuminate\Database\Seeder;

class QuizDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            QuizTypeSeeder::class
        ]);
    }
}
