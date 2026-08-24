<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get("login", "LoginController::loginPage");
$routes->post("login", "LoginController::login");