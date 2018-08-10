<?php

namespace App\Http\Controllers;

use App\Service\GamesService;
use \PDO as PDO;

class GamesController extends Controller
{

	public function getGames() {

        $service = new GamesService();

	    return json_encode($service->getGames());
	}
}
