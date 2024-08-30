<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/icons', 'Home::icons');
$routes->get('/forms', 'Home::forms');
$routes->get('/login_template', 'Home::login');
$routes->get('/profile', 'Home::profile');
$routes->get('/register_template', 'Home::register');
$routes->get('/tables', 'Home::tables');

service('auth')->routes($routes);
