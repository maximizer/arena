<?php

namespace App\Http\Controllers;

use App\Providers\RatingsServiceProvider;
use App\Service\GamesService;

class RatingsController extends Controller
{

	public function getNewRatings() {



		return 'here';
		//return $this->getRatingsProvider->getNewRatings([]);
	}
}
