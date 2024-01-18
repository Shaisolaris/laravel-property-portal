<?php

namespace App\Console\Commands;

use DateTimeZone;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Console\Command;
use App\Enums\User\UserRoleEnum;

class TestCommand extends Command
{
    protected $signature = 'test:command';

    protected $description = 'Command description';

    public function handle(): void
    {

    }
}
