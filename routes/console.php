<?php

use Illuminate\Foundation\Inspiring;
use App\Fortune;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('fortune {options}', function ($options) {
	
	if ($this->argument('options')=='s') {
		$this->info(Fortune::printFortuneMessage());
	}
	if ($this->argument('options')=='l') {
		$this->info(Fortune::printLongFortuneMessage());
	}
	if (($this->argument('options')=='sl')||($this->argument('options')=='ls')) {
		$this->info('options s and l can\'t be typed at the same time');
	}
    
});