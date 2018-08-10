<?php

namespace App\Http\Controllers;

use App\Providers\RatingsServiceProvider;

class RatingsController extends Controller
{
	public $getRatingsProvider;

	/**
	 * Create a new controller instance.
	 *
	 * @param RatingsServiceProvider	$getNewRatings
	 *
	 * @return void
	 */
	public function __construct(RatingsServiceProvider $getNewRatings)
	{
		//$this->getRatingsProvider = $getNewRatings;
	}

	public function getNewRatings() {
		return 'here';
		//return $this->getRatingsProvider->getNewRatings([]);
	}
}
