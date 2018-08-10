<?php
/**
 * Created by IntelliJ IDEA.
 * User: patrick
 * Date: 8/10/18
 * Time: 11:01 AM
 */

namespace App\Service;


use App\DAL\GamesRegistry;
use App\Model\GameModel;

class GamesService
{

    public function getGames() {

        $gameRegistry = new GamesRegistry();
        return $gameRegistry->selectAllGames();
    }
}