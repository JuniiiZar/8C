<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//Rutas públicas con acceso a todos
$routes->get('/', 'LoginController::index');
$routes->get('/reestablecer-password', 'ForgotPassController::index',['as'=>'reestablecer']);
$routes->get('/registrar-usuario', 'RegisterController::index',['as'=>'registro']);
$routes->post('/validar', 'LoginController::validar');
$routes->get('/clear', 'DbController::clear');
$routes->get('/logout', 'LoginController::logout');
//Creamos un grupo para rutas con acceso limitado o autenticado
$routes->group('admin',['filter'=>'sesion'], function ($routes){
    $routes->get('dashboard','DashboardController::index');
    $routes->post('guardar_usuario','Usuario::guardar');
    $routes->post('actualizar_usuario','Usuario::actualizar');
});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
