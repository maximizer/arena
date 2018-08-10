<?php
/**
 * Created by IntelliJ IDEA.
 * User: patrick
 * Date: 8/10/18
 * Time: 11:11 AM
 */

namespace App\DAL;


use App\Model\GameModel;

class GamesRegistry extends DAL
{
    public function selectAllGames() {

        $pdo = $this->getPdo();

        $sql = "SELECT * FROM games";
        $res = $pdo->query($sql)->fetchAll(\PDO::FETCH_CLASS);

        $arr = [];
        foreach($res as $row) {
            $arr[] = $this->_mapRowToModel($row);
        }

        return $arr;
    }

    /**
     * @param $row
     * @return GameModel
     */
    private function _mapRowToModel($row) {
        $game = new GameModel();

        $game->id = $row->game_id;
        $game->name = $row->name;

        return $game;
    }
}