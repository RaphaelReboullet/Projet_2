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

        ['playerDetails', '/newteam/player/{id:\d+}', 'GET'],
        ['modify', '/newteam/modify/{id:\d+}', ['GET', 'POST']],

        ['add', '/newteam/addplayer', ['GET', 'POST']],
        ['del','/newteam/delete/{id:\d+}', 'GET'],
    ],
    'Encounter' => [
        ['encounter', '/encounter', ['GET']],
        ['addEncounter', '/encounter/add', ['GET', 'POST']],
    ]
];

