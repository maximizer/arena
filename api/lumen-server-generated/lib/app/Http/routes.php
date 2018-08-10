<?php

/**
 * SpareFoot Arena
 * This is the API for the SpareFoot Arena hackathon project
 *
 * OpenAPI spec version: 1.0.0
 * Contact: patrick@sparefoot.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */

/**
 * SpareFoot Arena
 * @version 1.0.0
 */

$app->get('/', function () use ($app) {
    return $app->version();
});

/**
 * post addCompetitor
 * Summary: Add a new competitor
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->post('/SpareFootArena/arena/1.0.0/competitor', 'CompetitorApi@addCompetitor');
/**
 * get getCompetitors
 * Summary: Find competitors
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->get('/SpareFootArena/arena/1.0.0/competitor', 'CompetitorApi@getCompetitors');
/**
 * put updateCompetitor
 * Summary: Update an existing competitor
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->put('/SpareFootArena/arena/1.0.0/competitor', 'CompetitorApi@updateCompetitor');
/**
 * delete deleteCcompetitor
 * Summary: Deletes a competitor
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->delete('/SpareFootArena/arena/1.0.0/competitor/{competitorId}', 'CompetitorApi@deleteCcompetitor');
/**
 * get getCompetitorById
 * Summary: Find competitor by ID
 * Notes: Returns a single competitor
 * Output-Formats: [application/json, application/xml]
 */
$app->get('/SpareFootArena/arena/1.0.0/competitor/{competitorId}', 'CompetitorApi@getCompetitorById');
/**
 * post updateCompetitorWithForm
 * Summary: Updates a competitor in the store with form data
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->post('/SpareFootArena/arena/1.0.0/competitor/{competitorId}', 'CompetitorApi@updateCompetitorWithForm');
/**
 * post addGame
 * Summary: Add a new game
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->post('/SpareFootArena/arena/1.0.0/game', 'GameApi@addGame');
/**
 * get getGames
 * Summary: Find games
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->get('/SpareFootArena/arena/1.0.0/game', 'GameApi@getGames');
/**
 * put updateGame
 * Summary: Update an existing game
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->put('/SpareFootArena/arena/1.0.0/game', 'GameApi@updateGame');
/**
 * delete deleteGame
 * Summary: Deletes a game
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->delete('/SpareFootArena/arena/1.0.0/game/{gameId}', 'GameApi@deleteGame');
/**
 * get getGameById
 * Summary: Find game by ID
 * Notes: Returns a single game
 * Output-Formats: [application/json, application/xml]
 */
$app->get('/SpareFootArena/arena/1.0.0/game/{gameId}', 'GameApi@getGameById');
/**
 * post updateGameWithForm
 * Summary: Updates a game in the store with form data
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->post('/SpareFootArena/arena/1.0.0/game/{gameId}', 'GameApi@updateGameWithForm');
/**
 * post addMatch
 * Summary: Add a new match
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->post('/SpareFootArena/arena/1.0.0/match', 'MatchApi@addMatch');
/**
 * get getMatches
 * Summary: Find matches
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->get('/SpareFootArena/arena/1.0.0/match', 'MatchApi@getMatches');
/**
 * put updateMatch
 * Summary: Update an existing match
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->put('/SpareFootArena/arena/1.0.0/match', 'MatchApi@updateMatch');
/**
 * delete deleteMatch
 * Summary: Deletes a match
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->delete('/SpareFootArena/arena/1.0.0/match/{matchId}', 'MatchApi@deleteMatch');
/**
 * get getMatchById
 * Summary: Find match by ID
 * Notes: Returns a single match
 * Output-Formats: [application/json, application/xml]
 */
$app->get('/SpareFootArena/arena/1.0.0/match/{matchId}', 'MatchApi@getMatchById');
/**
 * post updateMatchWithForm
 * Summary: Updates a match in the store with form data
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->post('/SpareFootArena/arena/1.0.0/match/{matchId}', 'MatchApi@updateMatchWithForm');
/**
 * get getRatings
 * Summary: Get ratings for a given user, game, or combination and rating type
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->get('/SpareFootArena/arena/1.0.0/ratings', 'RatingsApi@getRatings');
/**
 * post createUser
 * Summary: Create user
 * Notes: This can only be done by the logged in user.
 * Output-Formats: [application/json, application/xml]
 */
$app->post('/SpareFootArena/arena/1.0.0/user', 'UserApi@createUser');
/**
 * post createUsersWithArrayInput
 * Summary: Creates list of users with given input array
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->post('/SpareFootArena/arena/1.0.0/user/createWithArray', 'UserApi@createUsersWithArrayInput');
/**
 * post createUsersWithListInput
 * Summary: Creates list of users with given input array
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->post('/SpareFootArena/arena/1.0.0/user/createWithList', 'UserApi@createUsersWithListInput');
/**
 * get loginUser
 * Summary: Logs user into the system
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->get('/SpareFootArena/arena/1.0.0/user/login', 'UserApi@loginUser');
/**
 * get logoutUser
 * Summary: Logs out current logged in user session
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->get('/SpareFootArena/arena/1.0.0/user/logout', 'UserApi@logoutUser');
/**
 * delete deleteUser
 * Summary: Delete user
 * Notes: This can only be done by the logged in user.
 * Output-Formats: [application/json, application/xml]
 */
$app->delete('/SpareFootArena/arena/1.0.0/user/{username}', 'UserApi@deleteUser');
/**
 * get getUserByName
 * Summary: Get user by user name
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->get('/SpareFootArena/arena/1.0.0/user/{username}', 'UserApi@getUserByName');
/**
 * put updateUser
 * Summary: Updated user
 * Notes: This can only be done by the logged in user.
 * Output-Formats: [application/json, application/xml]
 */
$app->put('/SpareFootArena/arena/1.0.0/user/{username}', 'UserApi@updateUser');

