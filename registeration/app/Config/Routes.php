<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('register', 'RegisterController::register');
$routes->post('register', 'RegisterController::register');
