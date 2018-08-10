<?php

namespace App\Http\Controllers;

use App\Service\MatchesService;
use Illuminate\Http\Request;

class MatchesController extends Controller
{

	public function getMatches() {

        $service = new MatchesService();

	    return json_encode($service->getMatches());
	}

	public function postMatch(Request $request) {

		$service = new MatchesService();

		return json_encode($service->postMatch($request));

	}
}
