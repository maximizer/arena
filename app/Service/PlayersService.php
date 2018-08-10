<?php
/**
 * Created by IntelliJ IDEA.
 * User: patrick
 * Date: 8/10/18
 * Time: 11:01 AM
 */

namespace App\Service;


use App\DAL\GamesRegistry;
use App\DAL\PlayerRegistry;
use App\Model\GameModel;

class PlayersService
{

    public function getPlayers() {

        $registry = new PlayerRegistry();
        return $registry->selectAllPlayers();
    }
}