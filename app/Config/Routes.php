<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'AboutController::index');
$routes->get('/skills', 'SkillController::index');
$routes->get('/projects', 'ProjectController::index');
$routes->get('/blogs', 'BlogController::index');
$routes->get('/contact', 'ContactController::index');
$routes->post('/contact/submit', 'ContactController::submit');

// Authentication routes
$routes->get('/login', 'AuthController::login');
$routes->post('/login/submit', 'AuthController::loginSubmit');
$routes->get('/register', 'AuthController::register');
$routes->post('/register/submit', 'AuthController::registerSubmit');
$routes->get('/logout', 'AuthController::logout');

// Protected routes
$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('blogs/create', 'BlogController::create');
    $routes->post('blogs/store', 'BlogController::store');
    // Add other routes that require authentication here
});