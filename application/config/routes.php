<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = "welcome";
$route['404_override'] = 'error';

/*********** USER DEFINED ROUTES *******************/

$route['categoria/(:any)'] = 'servicio/categoria/$1';
$route['detalleTour/(:any)'] = 'servicio/servicio/$1';
$route['loginMe'] = 'login/loginMe';
$route['logout'] = 'user/logout';
$route['registro'] = 'login/registro';
$route['nosotros'] = 'about';
$route['contactanos'] = 'contact';