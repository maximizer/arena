<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/foo', function () use ($router) {
    return 'foo';
});

$router->get('/ratings', 'RatingsController@getNewRatings');

$router->get('/games', 'GamesController@getGames');
<<<<<<< HEAD
$router->get('/players', 'PlayersController@getPlayers');
=======

$router->post('/match', 'MatchesController@postMatch');
>>>>>>> d230fd4cc3a88fcc4b0bf4d7fb2ce26498d08a06
