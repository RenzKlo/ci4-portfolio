<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'AboutController::index');
$routes->get('skills', 'SkillController::index');
$routes->get('projects', 'ProjectController::index');

$routes->group('', ['filter' => 'guest'], function ($routes) {
    $routes->get('login', 'AuthController::login');
    $routes->post('login/submit', 'AuthController::loginSubmit');
});

// Protected routes
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('register', 'AuthController::register');
    $routes->post('register/submit', 'AuthController::registerSubmit');
    $routes->get('logout', 'AuthController::logout');
    // Add other routes that require authentication here
});

// Blog routes
$routes->group('blogs', function ($routes) {
    $routes->get('/', 'BlogController::index');
    $routes->get('viewBlog/(:segment)', 'BlogController::viewBlogPost/$1');

    // Protected blog routes
    $routes->group('', ['filter' => 'auth'], function ($routes) {
        $routes->get('create', 'BlogController::create');
        $routes->post('store', 'BlogController::store');
        $routes->get('edit/(:segment)', 'BlogController::edit/$1');
        $routes->post('update/(:segment)', 'BlogController::update/$1');
        $routes->get('delete/(:segment)', 'BlogController::delete/$1');
    });
});

// Contact routes
$routes->group('contact', function ($routes) {
    $routes->get('/', 'ContactController::index');
    $routes->post('submit', 'ContactController::submit');

    // Protected contact routes
    $routes->group('', ['filter' => 'auth'], function ($routes) {
        $routes->get('viewList', 'ContactController::viewList');
    });
});


