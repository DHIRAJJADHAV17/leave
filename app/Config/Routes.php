<?php

namespace Config;
use App\Helpers\CustomFunctions; // Add the appropriate namespace if needed

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$controllerName = 'App\Controllers\PageNotFoundController';
$methodName = 'index';
$routes->set404Override("$controllerName::$methodName");




$routes->get('/logout', 'AuthController::logout');
$routes->get('/', 'AuthController::login');
$routes->match(['get','post'],'/login', 'AuthController::login');
$routes->match(['get','post'], '/signup','AuthController::signup') ;

$routes->match(['get','post'], '/verify','AuthController::virfyotp') ;
$routes->match(['get','post'], '/reset','AuthController::resetpass') ;
$routes->match(['get','post'], '/changepass','AuthController::changepass') ;






$routes->match(['get','post'],'/adminlogin', 'Home::adminlogin') ;
$routes->match(['get','post'],'/admindashboard', 'Home::index',['filter'=>'adminauth']);


$routes->get('/dashboard', 'AuthController::dashboard', ['filter' => 'userteachadmin']);


$routes->match(['get','post'],'/waste', 'Home::waste') ;
$routes->match(['get','post'],'/requestt', 'Home::requestt') ;
$routes->match(['get','post'],'/editpage/(:any)', 'Home::editpage/$1/$1') ;
$routes->get('/deletpage/(:any)', 'Home::deletpage/$1');

$routes->get('/My_leave', 'Home::leave');
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
