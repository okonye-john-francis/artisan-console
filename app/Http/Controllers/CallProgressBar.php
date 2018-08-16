<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class CallProgressBar extends Controller
{


		public function displayProgressBar(){

				$progressBar = \Artisan::call('progressbar:start', [
				       'duration' => 10
				   ]);

				//dd($progressBar);

		}


}
