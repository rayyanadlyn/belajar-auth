<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/register', 'Auth::register');
$routes->post('/auth/valid_login', 'Auth::valid_login');
$routes->post('/auth/valid_register', 'Auth::valid_register');

$routes->get('/user', 'User::index');

$routes->get('/', 'Home::index');
$routes->resource('product');