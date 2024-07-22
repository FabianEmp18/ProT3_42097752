<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Principal', 'Home::index');
$routes->get('nosotros', 'Home::nosotros');
$routes->get('AcercaDe', 'Home::AcercaDe');
$routes->get('registrar', 'Home::registrar');
$routes->get('login', 'Home::login');
$routes->get('usuarios', 'Home::usuarios');

// Rutas de productos
$routes->get('productos/componentes', 'Home::componentes');
$routes->get('productos/perifericos', 'Home::perifericos');
$routes->get('productos/accesorios', 'Home::accesorios');
$routes->get('productos/otros', 'Home::otros');

// Rutas del registro de usuarios
$routes->get('/registrar', 'usuario_Controller::create');
$routes->post('/enviar-form', 'usuario_Controller::formValidation');

// Rutas del Login
$routes->get('/login', 'login_Controller');
$routes->post('/enviarlogin', 'login_Controller::auth');
$routes->get('/panel', 'panel_Controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_Controller::logout');
$routes->post('enviarlogin', 'AuthController::login');
$routes->post('acceder_admin', 'AuthController::accederAdmin');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
