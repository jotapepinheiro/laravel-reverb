<?php

namespace App\Console\Commands;

use App\Events\CountReverbEvent;
use Illuminate\Console\Command;

class PlaygroundCommand extends Command
{
    protected $signature = 'play';

    protected $description = 'Command description';

    public function handle(): void
    {
        foreach (range(1, 10) as $i) {
            sleep(1);
            CountReverbEvent::dispatch();
        }

    }
}
