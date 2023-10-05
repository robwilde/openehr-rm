<?php

namespace MrWilde\OpenEhrRM\Commands;

use Illuminate\Console\Command;

class OpenEhrRMCommand extends Command
{
    public $signature = 'openehr-rm';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
