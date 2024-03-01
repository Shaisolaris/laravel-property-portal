<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Quiz\database\seeders\QuizTypeSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            UserSeeder::class,
            OccupationsSeeder::class,
            EducationsSeeder::class,
            AppSettingsSeeder::class,
            QuizTypeSeeder::class,
//            ReviewSeeder::class
        ]);
    }
}
