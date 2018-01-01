<?php

namespace App\Console\Commands\Quote;

use Illuminate\Console\Command;
use App\Contracts\Quote;

class ImportRandomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:importRandom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Quote $quote)
    {
        $quote->import();
    }
}