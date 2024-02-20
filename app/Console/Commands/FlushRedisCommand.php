<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\Console\Command\Command as CommandAlias;

class FlushRedisCommand extends Command
{
    protected $signature = 'flush:redis';
    protected $description = 'Command description';


    public function handle(): int
    {
        Redis::command('flushdb');

        return CommandAlias::SUCCESS;
    }
}
