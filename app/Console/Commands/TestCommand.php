<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;
use App\Facades\Settings;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Modules\Quiz\app\Models\EiQuiz;

class TestCommand extends Command
{
    protected $signature = 'test:command';
    protected $description = 'Command description';

    public function handle(): void
    {
        dd(__NAMESPACE__, __CLASS__, __METHOD__, Str::replace('_', '', Str::title('yes_or_no')));
    }
}
