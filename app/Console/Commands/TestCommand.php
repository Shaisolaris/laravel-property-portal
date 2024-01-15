<?php

namespace App\Console\Commands;

use DateTimeZone;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:command';

    protected $description = 'Command description';

    public function handle(): void
    {
        dd(User::whereEmail('instructorSchool@gmail.com')->first());
    }
}
