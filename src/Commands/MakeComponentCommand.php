<?php

namespace Bfg\Dev\Commands;

use Illuminate\Foundation\Console\ComponentMakeCommand;

/**
 * Class MakeComponentCommand
 * @package Bfg\Dev\Commands
 */
class MakeComponentCommand extends ComponentMakeCommand
{
    public function handle()
    {
        dd(1);

        return parent::handle(); // TODO: Change the autogenerated stub
    }
}