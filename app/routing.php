<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'Player' => [
        ['welcome', '/', ['GET']],
        ['team', '/newteam', ['GET']],
        ['playerDetails', '/newteam/player/{id:\d+}', ['GET']],
        ['addPlayer', '/newteam/addplayer', ['GET', 'POST']],
        ['delPlayer','/newteam/delete/{id:\d+}', ['GET']],
    ],
];

