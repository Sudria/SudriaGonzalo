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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/sudriagonzalo/public/quienes', 'Home::quienes');
$routes->get('/sudriagonzalo/public/comercializacion', 'Home::comercializacion');
$routes->get('/sudriagonzalo/public/contacto', 'Home::contacto');
$routes->get('/sudriagonzalo/public/terminos', 'Home::terminos');
$routes->get('/sudriagonzalo/public/crear_usuario', 'Home::crear_usuario');
$routes->get('/sudriagonzalo/public/crear_producto', 'Home::crear_producto');
$routes->get('/sudriagonzalo/public/tabla_usuarios', 'Home::lista_usuarios');
$routes->get('/sudriagonzalo/public/editar_usuario', 'Home::actualizar');
$routes->get('/sudriagonzalo/public/ingresar', 'Home::login');
$routes->get('/sudriagonzalo/public/catalogo', 'Home::catalogo');
$routes->get('/sudriagonzalo/public/tabla_consultas', 'Home::lista_consultas');


//methods Usuario Controller
$routes->get('/sudriagonzalo/public/logout', 'UsuarioController::logout');
$routes->get('/sudriagonzalo/public/eliminar/(:any)', 'UsuarioController::eliminar/$1');
$routes->get('/sudriagonzalo/public/editar_usuario/(:any)', 'UsuarioController::editar_usuario/$1');
$routes->post('/sudriagonzalo/public/login', 'UsuarioController::login');
$routes->post('/sudriagonzalo/public/crear', 'UsuarioController::crear');



//methods Producto Controller
$routes->post('/sudriagonzalo/public/create_producto', 'ProductoController::crear');



//methods Consulta Controller
$routes->post('/sudriagonzalo/public/create_consulta', 'ConsultaController::crear');


/*
 Additional Routing
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
