<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rutas para gestión de claves API (solo administradores)
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('api-claves', 'ApiClaves::listarClaves');
    $routes->post('api-claves/crear', 'ApiClaves::crearClave');
    $routes->get('api-claves/eliminar/(:segment)', 'ApiClaves::eliminarClave/$1');
});

// Rutas para notificaciones
$routes->post('notificaciones/enviar', 'Notificacion::enviarNotificacionPadres');
