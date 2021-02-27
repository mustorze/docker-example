<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class TestingRedis extends Command
{
    const KEY = 'testing';

    protected $signature = 'redis:testing';
    protected $description = 'Testar o redis';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info(printf('Redis key (%s): %s', $this::KEY, Cache::get($this::KEY)));

        Cache::add($this::KEY, 'Olá!');

        $this->info(printf('Redis key (%s): %s', $this::KEY, Cache::get($this::KEY)));
    }
}
