<?php
/**
 * Created by IntelliJ IDEA.
 * User: patrick
 * Date: 8/10/18
 * Time: 11:11 AM
 */

namespace App\DAL;

use App\Model\MatchModel;
use Illuminate\Http\Request;

class MatchesRegistry extends DAL
{
	public function selectAllMatches() {

		$pdo = $this->getPdo();

		$sql = "SELECT * FROM matches";
		$res = $pdo->query($sql)->fetchAll(\PDO::FETCH_CLASS);

		$arr = [];
		foreach($res as $row) {
			$arr[] = $this->_mapRowToModel($row);
		}

		return $arr;
	}

	public function insertMatch(Request $request) {

		$pdo = $this->getPdo();
		$insertMatchObject = (array) $this->_mapRequestToModel($request);

		$sql = "INSERT INTO matches (" . implode(',', array_keys($insertMatchObject)) . ") VALUES('" . implode('\',\'', array_values($insertMatchObject)) . "');";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
	}

	/**
	 * @param $row
	 * @return MatchModel
	 */
	private function _mapRowToModel($row) {
		$match = new MatchModel();

		$match->match_id = $row->match_id;
		$match->game_id = $row->game_id;
		$match->ratable_1 = $row->ratable_1;
		$match->ratable_2 = $row->ratable_2;
		$match->score_1 = $row->score_1;
		$match->score_2 = $row->score_2;
		$match->timestamp = $row->timestamp;

		return $match;
	}

	/**
	 * @param Request $request
	 * @return MatchModel
	 */
	private function _mapRequestToModel(Request $request) {
		$match = new MatchModel();

		$match->match_id = $request->input('match_id');
		$match->game_id = $request->input('game_id');
		$match->ratable_1 = $request->input('ratable_1');
		$match->ratable_2 = $request->input('ratable_2');
		$match->score_1 = $request->input('score_1');
		$match->score_2 = $request->input('score_2');
		$match->timestamp = $request->input('timestamp');

		return $match;
	}
}