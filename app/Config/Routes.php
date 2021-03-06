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
$routes->get('/sudriagonzalo/public/ingresar', 'Home::login');
$routes->get('/sudriagonzalo/public/catalogo', 'Home::catalogo');
$routes->get('/sudriagonzalo/public/tabla_consultas', 'Home::lista_consultas');
$routes->get('/sudriagonzalo/public/tabla_productos', 'Home::lista_productos');
$routes->get('/sudriagonzalo/public/detalles/(:num)', 'Home::detalles/$1');
$routes->get('/sudriagonzalo/public/tabla_facturas', 'Home::compras');

$routes->get('/sudriagonzalo/public/editar_usuario/(:num)', 'Home::editar_usuario/$1');
$routes->get('/sudriagonzalo/public/editar_producto/(:num)', 'Home::editar_producto/$1');
$routes->get('/sudriagonzalo/public/carrito', 'Home::carrito');
$routes->get('/sudriagonzalo/public/usuario_deshabilitado', 'Home::usuario_deshabilitado');

$routes->get('/sudriagonzalo/public/facturas/(:num)', 'Home::facturas/$1');
$routes->get('/sudriagonzalo/public/mis_compras', 'Home::mis_compras');



//methods Usuario Controller
$routes->get('/sudriagonzalo/public/logout', 'UsuarioController::logout');
$routes->get('/sudriagonzalo/public/eliminar/(:any)', 'UsuarioController::eliminar/$1');
$routes->post('/sudriagonzalo/public/login', 'UsuarioController::login');
$routes->post('/sudriagonzalo/public/crear', 'UsuarioController::crear');
$routes->post('/sudriagonzalo/public/modificar_usuario', 'UsuarioController::modificar');
$routes->get('/sudriagonzalo/public/cambio_estadou/(:num)/(:num)', 'UsuarioController::cambioEstado/$1/$2');
$routes->post('/sudriagonzalo/public/agregar_pcarrito/(:num)', 'UsuarioController::agregar_pcarrito/$1');
$routes->get('/sudriagonzalo/public/eliminar_pcarrito/(:num)', 'UsuarioController::eliminar_pcarrito/$1');
$routes->get('/sudriagonzalo/public/vaciar_carrito', 'UsuarioController::vaciar_carrito');



//methods Producto Controller
$routes->post('/sudriagonzalo/public/create_producto', 'ProductoController::crear');
$routes->post('/sudriagonzalo/public/modificar_producto', 'ProductoController::modificar');
$routes->get('/sudriagonzalo/public/cambio_estadop/(:num)/(:num)', 'ProductoController::cambioEstado/$1/$2');
$routes->get('/sudriagonzalo/public/agregar_producto', 'ProductoController::agregarProducto');



//methods Consulta Controller
$routes->post('/sudriagonzalo/public/create_consulta', 'ConsultaController::crear');
$routes->get('/sudriagonzalo/public/cambio_estadoc/(:num)/(:num)', 'ConsultaController::cambioEstado/$1/$2');


//methods Factura 
$routes->get('/sudriagonzalo/public/comprar', 'UsuarioController::comprar');



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
