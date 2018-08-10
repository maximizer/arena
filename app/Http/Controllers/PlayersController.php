<?php

namespace App\Http\Controllers;

use App\Service\GamesService;
use App\Service\PlayersService;
use \PDO as PDO;

class PlayersController extends Controller
{

	public function getPlayers() {

        $service = new PlayersService();

	    return json_encode($service->getPlayers());
	}
}