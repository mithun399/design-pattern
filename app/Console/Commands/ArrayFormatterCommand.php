<?php

namespace App\Console\Commands;

use App\FactoryPattern\FormatterFactory;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:format {formatter}')]
#[Description('Format an Array to the specified formatting type')]
class ArrayFormatterCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $type = $this->argument('formatter');
        $formatter = FormatterFactory::build($type);
        $this->info($formatter->format([
            'data 1',
            'data 2',
            'key' => 'value',
        ]));
        return Command::SUCCESS;
    }
}
