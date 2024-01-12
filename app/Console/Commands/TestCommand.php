<?php

namespace App\Console\Commands;

use DateTimeZone;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:command';

    protected $description = 'Command description';

    public function handle(): void
    {
        dd(route('landing.landing.index'));
    }
}
