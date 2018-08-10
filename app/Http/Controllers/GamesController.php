<?php

namespace App\Http\Controllers;

use App\Service\GamesService;

class GamesController extends Controller
{

	public function getGames() {

        $service = new GamesService();

	    return json_encode($service->getGames());
	}
}
