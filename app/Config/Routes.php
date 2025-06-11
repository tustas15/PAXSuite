<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');  // Esta ruta ahora maneja la redirección
$routes->get('/login', 'AuthController::loginView');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

// Dashboards protegidos
$routes->get('/admin/dashboard', 'AdminDashboard::index', ['filter' => 'auth']);
$routes->get('/catequista/dashboard', 'CatequistaDashboard::index', ['filter' => 'auth']);
$routes->get('/secretaria/dashboard', 'SecretariaDashboard::index', ['filter' => 'auth']);
$routes->get('/tesorero/dashboard', 'TesoreroDashboard::index', ['filter' => 'auth']);
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

// Configuración base
$routes->setAutoRoute(false);
$routes->setTranslateURIDashes(false);
$routes->set404Override();
