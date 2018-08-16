<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\DripEmailer;
use App\User;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send drip e-mails to a user';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $drip;


    public function __construct(DripEmailer $drip)
        {
            parent::__construct();

            $this->drip = $drip;
        }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       $this->info($this->drip->send($this->argument('user'))) ;
    }
}
