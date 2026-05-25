<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/games', 'GameController::index');
$routes->get('/games/create', 'GameController::create');
$routes->post('/games/store', 'GameController::store');
$routes->get('/games/edit/(:num)', 'GameController::edit/$1');
$routes->post('/games/update/(:num)', 'GameController::update/$1');
$routes->post('/games/delete/(:num)', 'GameController::delete/$1');

$routes->get('operating_systems', 'Operating_systemController::index');
$routes->get('/operating_systems/games/(:num)', 'Operating_systemController::games/$1');
