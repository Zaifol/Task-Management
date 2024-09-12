<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AuthController::home');
$routes->get('/home', 'AuthController::home');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->get('/profile', 'AuthController::profile');
$routes->get('/dashboard', 'AuthController::dashboard');
$routes->get('/newtask', 'AuthController::newtask');

$routes->post('/register','AuthController::process_register');
$routes->post('/login','AuthController::process_login');
$routes->get('/logout','AuthController::logout');
$routes->post('/newtask','TaskController::process_newtask');
$routes->get('/update(:num)','TaskController::update/$1');

$routes->get('/update/(:num)','TaskController::process_update/$1');
$routes->post('/delete/(:num)','TaskController::delete/$1');

