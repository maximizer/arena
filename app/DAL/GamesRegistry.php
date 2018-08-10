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
    /**
     * @return array
     */
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
     * @param $id
     */
    public function selectGameById($id) {
        $pdo = $this->getPdo();

        $stmt = $pdo->prepare("SELECT * FROM games WHERE game_id = :game_id");
        $stmt->execute([':game_id' => $id]);

        $obj = $stmt->fetchObject();
    }

    /**
     * @param GameModel $game
     */
    public function updateGame(GameModel $game) {
        $pdo = $this->getPdo();

        $stmt = $pdo->prepare("UPDATE games SET name = :name WHERE game_id = :game_id");
        $stmt->execute([':id' => $game->id, ':game_id' => $game->id]);
    }

    /**
     * @param $id
     */
    public function deleteGame($id) {
        $pdo = $this->getPdo();

        $stmt = $pdo->prepare("DELETE FROM games WHERE game_id = :game_id");
        $stmt->execute([':game_id' => $id]);
    }

    /**
     * @param GameModel $game
     */
    public function insertGame(GameModel $game) {
        $pdo = $this->getPdo();

        $stmt = $pdo->prepare("INSERT INTO games (name) VALUES (:name)");
        $stmt->execute([':name' => $game->name]);
    }

    private function _mapRowToModel($row) {
        $game = new GameModel();
        $game->id = $row->game_id;
        $game->name = $row->name;

        return $game;
    }

}