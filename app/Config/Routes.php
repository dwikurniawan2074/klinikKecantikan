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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('/home/booking/store', 'Home::store');
$routes->get('/mahasiswa', 'MahasiswaController::index');
$routes->get('/create', 'MahasiswaController::create');
$routes->post('/store', 'MahasiswaController::store');
$routes->delete('/delete/(:num)', 'MahasiswaController::delete/$1');
$routes->post('/update/(:num)', 'MahasiswaController::update/$1');
$routes->get('/edit/(:num)', 'MahasiswaController::edit/$1');
$routes->get('/index', 'Pages::index');
// $routes->get('(:any)', 'Pages::view/$1');



$routes->get('/admin/halaman_order_complete/store/(:num)', 'TreatmentController::storeComplete/$1');
$routes->get('/admin/halaman_order_complete/cancel/(:num)', 'TreatmentController::cancelComplete/$1');
$routes->get('/admin/halaman_order_complete/delete/(:num)', 'TreatmentController::deleteOrder/$1');
//Routes Halaman Utama
$routes->get('/home', 'Home::index');
$routes->post('/home/book', 'Home::book');
// $routes->get('/pages/login', 'Home::login');
$routes->get('/login', 'Home::login');
$routes->get('/logout', 'Home::logout');
$routes->get('/pages/register', 'Home::register');
// $routes->get('/home/(:any)' , 'Home::viewTreatment/$1');


//Routes Admin
$routes->get('/admin/dashboard', 'AdminController::dashboard');
$routes->get('/admin/halaman_admin', 'AdminController::halaman_admin');
$routes->get('/admin/halaman_treatment', 'AdminController::halaman_treatment');
$routes->post('/admin/halaman_treatment', 'AdminController::halaman_treatment');
$routes->get('/admin/halaman_daftar_order', 'AdminController::halaman_daftar_order');
$routes->get('/admin/halaman_order_complete', 'AdminController::halaman_order_complete');
$routes->get('/admin/halaman_order_cancel', 'AdminController::halaman_order_cancel');
$routes->get('/admin/halaman_kritik_saran', 'AdminController::halaman_kritik_saran');

$routes->post('/admin/treatment/store', 'TreatmentController::store');
$routes->get('/admin/treatment/hapus/(:num)', 'TreatmentController::delete/$1');
$routes->post('/admin/treatment/update', 'TreatmentController::update');
$routes->post('/kritiksaran/store', 'KritikSaranController::store');
$routes->get('/admin/delete/kritik_saran/(:num)', 'KritikSaranController::delete/$1');

//Routes default untuk pages view
$routes->get('(:any)', 'Pages::view/$1');

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
