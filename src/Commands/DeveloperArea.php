<?php

namespace Adamantine\Adamantine\Commands;

use Adamantine\Adamantine\Helpers\AdamantineHelpers;
use Illuminate\Console\Command;

class DeveloperArea extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'adamantine:developer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate developer area';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $key = uniqid(random_int(10, 99), true);
        $key = str_replace('.', '/', $key);
        $this->info(env('DEVELOPER_AREA_ACCESS'));
        if (empty(env('DEVELOPER_AREA_ACCESS'))) {
            $this->info('Creating key-value');
            AdamantineHelpers::writeEnv('DEVELOPER_AREA_ACCESS', $key);
        } else {
            $this->info('Updating existing key-value');
            AdamantineHelpers::updateEnv('DEVELOPER_AREA_ACCESS', $key);
        }
        $this->info(env('DEVELOPER_AREA_ACCESS'));
    }
}
