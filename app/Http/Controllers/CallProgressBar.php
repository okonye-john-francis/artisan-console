<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class CallProgressBar extends Controller
{


		public function displayProgressBar(){

				$progressBar = \Artisan::call('email:send', [
				       'user' => 'Donuld Trump'
				   ]);

				//dd($progressBar);

		}


}
