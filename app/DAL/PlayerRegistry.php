<?php
/**
 * Created by IntelliJ IDEA.
 * User: patrick
 * Date: 8/10/18
 * Time: 11:11 AM
 */

namespace App\DAL;

use App\Model\GameModel;
use App\Model\PlayerModel;

class PlayerRegistry extends DAL
{
    /**
     * @return array
     */
    public function selectAllPlayers() {

        $pdo = $this->getPdo();

        $sql = "SELECT * FROM ratables WHERE type = 'PLAYER'";
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
    public function selectPlayerById($id) {
        $pdo = $this->getPdo();

        $stmt = $pdo->prepare("SELECT * FROM ratables WHERE ratable_id = :ratable_id AND type = 'PLAYER'");
        $stmt->execute([':ratable_id' => $id]);

        $obj = $stmt->fetchObject();
    }

    /**
     * @param PlayerModel $player
     */
    public function updatePlayer(PlayerModel $player) {
        $pdo = $this->getPdo();

        $stmt = $pdo->prepare("UPDATE ratables SET first_name = :first_name, last_name = :last_name, 
          email_address = :email_address,
          hipchat_id = :hipchat_id, home_base = :home_base WHERE ratable_id = :ratable_id");
        $stmt->execute([':first_name'    => $player->firstName,
                        ':last_name'     => $player->lastName,
                        ':email_address' => $player->emailAddress,
                        ':home_base'     => $player->homeBase,
                        ':ratable_id'    => $player->id ] );
    }

    /**
     * @param $id
     */
    public function deletePlayer($id) {
        $pdo = $this->getPdo();

        $stmt = $pdo->prepare("DELETE FROM ratables WHERE ratable_id = :ratable_id");
        $stmt->execute([':ratable_id' => $id]);
    }

    /**
     * @param PlayerModel $player
     */
    public function insertPlayer(PlayerModel $player) {
        $pdo = $this->getPdo();

        $stmt = $pdo->prepare("INSERT INTO ratables 
          (first_name, last_name, email_address. hipchat_id, home_base, type) 
            VALUES (:first_name, :last_name, :email_address. :hipchat_id, :home_base, 'PLAYER')");

        $stmt->execute([':first_name'    => $player->firstName,
            ':last_name'     => $player->lastName,
            ':email_address' => $player->emailAddress,
            ':home_base'     => $player->homeBase]);
    }

    /**
     * @param $row
     * @return PlayerModel
     */
    private function _mapRowToModel($row) {
        $player = new PlayerModel();
        $player->firstName = $row->first_name;
        $player->lastName = $row->last_name;
        $player->emailAddress = $row->email_address;
        $player->homeBase = $row->home_base;
        $player->id = $row->ratable_id;

        return $player;
    }

}