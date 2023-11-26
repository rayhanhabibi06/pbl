<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->get('/signup', 'Signup::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard/history', 'Dashboard::history');
