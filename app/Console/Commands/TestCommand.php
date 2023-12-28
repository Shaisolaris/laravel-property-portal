<?php

namespace App\Console\Commands;

use App\Models\Api\User;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:command';
    protected $description = 'Command description';

    public function handle(): void
    {
        $user = User::find(1046);

        dd($user->role->name);
    }
}
