<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$routes->setdefaultnamespace('application\controllers');
$routes->setdefaultcontroller('Home');
$routes->setdefaultmethod('index');
$routes->settranslateURIDashes(false);
$routes->set404override();



$route['/login'] = "AuthController/login";
$routes->get('/logout', 'AuthController::logout');
$routes->get('/', 'AuthController::index');
$routes->match(['get','post'],'/payment', 'AuthController::payment');
$routes->match(['get','post'],'/image/(:any)', 'Home::image/$1/$1');



// $routes->match(['get','post'],'/login', 'AuthController::login');
$routes->match(['get','post'], '/signup','AuthController::signup') ; 
$routes->get('/dashboard', 'AuthController::dashboard',['filter'=>'auth']);
$routes->get('/profile', 'Home::profile');
$routes->get('/My_learning', 'Home::learning',['filter'=>'auth']);
$routes->match(['get','post'], '/courses','AuthController::courses') ;
$routes->match(['get','post'], '/editcourses/(:any)','AuthController::editcourses/$1/$1') ;
$routes->match(['get','post'], '/renew/(:any)','Home::renew/$1',['filter'=>'auth']) ;
$routes->match(['get','post'], '/enroll/(:any)','Home::enroll/$1',['filter'=>'auth']) ;




$routes->match(['get','post'],'/adminlogin', 'Home::adminlogin') ;
$routes->get('/addash', 'Home::index',['filter'=>'adminauth']);
$routes->match(['get','post'],'/addcourse', 'Home::addcourse') ;
$routes->match(['get','post'],'/activedetail', 'Home::activedetail',['filter'=>'adminauth']) ;
$routes->match(['get','post'],'/duedetail', 'Home::duedetail',['filter'=>'adminauth']) ;
$routes->match(['get','post'],'/request', 'Home::request',['filter'=>'adminauth']) ;
$routes->match(['get','post'],'/edit/(:any)', 'Home::edit/$1/$1',['filter'=>'adminauth']) ;
$routes->get('/delet/(:any)', 'Home::delet/$1',['filter'=>'adminauth']);
$routes->get('/authstudent', 'Home::authstudent',['filter'=>'adminauth']);
$routes->get('/authteacher', 'Home::authteacher',['filter'=>'adminauth']);
$routes->match(['get','post'],'/editmember/(:any)', 'Home::editmember/$1/$1',['filter'=>'adminauth']) ;


$routes->match(['get','post'],'/teachsignup', 'Home::teachsignup') ;
$routes->match(['get','post'],'/teachlogin', 'Home::teachlogin') ;
$routes->get('/student', 'Home::student',['filter'=>'teachauth']);
$routes->get('/teachprofile', 'Home::profile',['filter'=>'teachauth']);
$routes->match(['get','post'],'/student', 'Home::student',['filter'=>'teachauth']) ;








// $route['default_controller'] = 'HomeController/home';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;
// $route['home'] = "HomeController/home";
// $route['appointment'] = "HomeController/appointment";
// $route['token'] = "HomeController/token";
// $route['get/schedule'] = "HomeController/get_schedule";
// $route['book/appointment'] = "HomeController/book_appointment";
// $route['get/token/number'] = "HomeController/get_token_number";
// /*Backend Routes*/
// $route['doctor/login'] = "backend/DoctorLoginController/login";
// $route['doctor/validate/credentials'] = "backend/DoctorLoginController/validate_credentials";
// $route['doctor/logout'] = "backend/DoctorLoginController/logout";
// $route['doctor/dashboard'] = "backend/DoctorDashboardController/dashboard";

// $route['doctor/all/schedules'] = "backend/DoctorScheduleController/all_schedules";
// $route['doctor/create/schedule'] = "backend/DoctorScheduleController/create_schedule";
// $route['doctor/add/schedule/details'] = "backend/DoctorScheduleController/add_schedule_details";
// $route['doctor/delete/schedule/(:any)'] = "backend/DoctorScheduleController/delete_schedule_details/$1";
// $route['doctor/edit/schedule/(:any)'] = "backend/DoctorScheduleController/edit_schedule_details/$1";
// $route['doctor/update/schedule/details'] = "backend/DoctorScheduleController/update_schedule_details";

// $route['doctor/create/appointment'] = "backend/DoctorAppointmentController/create_appointment";
// $route['doctor/add/appointment/details'] = "backend/DoctorAppointmentController/add_appointment_details";
// $route['doctor/all/appointments'] = "backend/DoctorAppointmentController/all_appointments";
// $route['doctor/all/appointments/(:any)'] = "backend/DoctorAppointmentController/all_appointments/$1";
// $route['doctor/delete/appointment/(:any)'] = "backend/DoctorAppointmentController/delete_appointment/$1";

// $route['update/token'] = "backend/DoctorDashboardController/update_token";
// $route['update/display/token'] = "backend/DoctorDashboardController/update_display_token";


// $route['doctor/all/noticeboards'] = "backend/DoctorNoticeboardController/all_noticeboards";
// $route['doctor/update/notice'] = "backend/DoctorNoticeboardController/update_notice";
// $route['doctor/change/notice/status/(:any)/(:any)'] = "backend/DoctorNoticeboardController/change_notice_status/$1/$2";
// /*Backend Routes*/