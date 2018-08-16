<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ProgressBar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'progressbar:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'demonstrates how a progress bar works and takes a duration specified in the commandline
                              argument given to it';

    /**
     * Create a new command instance.
     *
     * @return void
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
    public function handle()
    {
      //  $progress_duration = $this->argument('duration');

        $progress_duration = $this->ask('Give me a duration between 10 and 15 of how long you would want me to run');

        print $this->displayProgressBar($progress_duration);

    }

    private function displayProgressBar($progress_duration){

        if ($progress_duration > 9 && $progress_duration < 16) {

            $bar = $this->output->createProgressBar($progress_duration);

            for ($i=0; $i < $progress_duration ; $i++) {

                 sleep(1);
                 $bar->advance();

            }

            $bar->finish();
            $this->displayProgressBarAgain($progress_duration);

        }else{

             $this->error('duration should be between 10 and 15');
        }

    }

    private function displayProgressBarAgain($progress_duration){

        if ($this->confirm("\nWould you wish to see the progressbar magic again ?")) {

            print $this->displayProgressBar($progress_duration);

        }

    }
}
