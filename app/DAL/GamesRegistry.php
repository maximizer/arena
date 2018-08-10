<?php
/**
 * Created by IntelliJ IDEA.
 * User: patrick
 * Date: 8/10/18
 * Time: 11:11 AM
 */

namespace App\DAL;


use App\Model\GameModel;

class GamesRegistry
{
    public function selectAllGames() {

        $host = 'db';
        $db   = 'arena';
        $user = 'root';
        $pass = 'foo';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new \PDO($dsn, $user, $pass, $opt);

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