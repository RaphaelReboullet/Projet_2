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
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, method
        ['add', '/item/add', ['GET', 'POST']], // action, url, method
        ['edit', '/item/edit/{id:\d+}', ['GET', 'POST']], // action, url, method
        ['show', '/item/{id:\d+}', 'GET'], // action, url, method
        ['delete', '/item/delete/{id:\d+}', 'GET'], // action, url, method
    ],
    'Player' => [
        ['team', '/newteam', ['GET']],
        ['playerDetails', '/newteam/player/{id:\d+}', 'GET'],
        ['addPlayer', '/newteam/addplayer', ['GET', 'POST']],
        ['delPlayer','/newteam/delete/{id:\d+}', 'GET'],
    ],
    'Encounter' => [
        ['encounter', '/encounter', ['GET', 'POST']],
    ],
];
