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
        ['welcome', '/infos', ['GET']],
        ['team', '/newteam', ['GET']],

        ['playerDetails', '/newteam/player/{id:\d+}', 'GET'],

        ['add', '/newteam/addplayer', ['GET', 'POST']],
        ['del','/newteam/delete/{id:\d+}', 'GET'],
    ],
    'Encounter' => [
        ['encounter', '/calendrier', ['GET']],
        ['addEncounter', '/calendrier/add', ['GET', 'POST']],
    ]
];

