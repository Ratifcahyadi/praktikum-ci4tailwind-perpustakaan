<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// $routes->get('/upload', 'DashboardController::uppdf');
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// $routes->get('/input', 'Home::formInput');
$routes->get('/', 'SigninController::index');
$routes->post('/login', 'SigninController::login');

$routes->get('/register', 'SignupController::register');
$routes->post('/signup', 'SignupController::signup');
$routes->get('/success', 'SignupController::signup');


$routes->get('/input', 'DashboardController::add');
$routes->get('/edit/(:num)', 'DashboardController::edit/$1');
$routes->post('/proses_edit', 'DashboardController::edit_data');
$routes->get('/hapus/(:any)', 'DashboardController::delete_data/$1');
$routes->get('/dashboard', 'DashboardController::index');




$routes->get('/admin', 'SideController::admin');
$routes->get('/buku', 'SideController::buku');
$routes->get('/kategori', 'SideController::kategori');
$routes->get('/peminjaman', 'SideController::peminjaman');
$routes->get('/pengembalian', 'SideController::pengembalian');
$routes->get('/anggota', 'SideController::anggota');

$routes->post('/proses_add', 'AnggotaController::proses');


// =====================================================================


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
