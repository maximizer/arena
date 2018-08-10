<?php
/**
 * Created by IntelliJ IDEA.
 * User: patrick
 * Date: 8/10/18
 * Time: 11:01 AM
 */

namespace App\Service;


use App\DAL\MatchesRegistry;
use Illuminate\Http\Request;

class MatchesService
{

	public function getMatches() {

		$matchRegistry = new MatchesRegistry();
		return $matchRegistry->selectAllMatches();
	}

	public function postMatch(Request $request) {

		$matchRegistry = new MatchesRegistry();
		return $matchRegistry->insertMatch($request);
	}
}