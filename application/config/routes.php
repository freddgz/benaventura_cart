<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = "welcome";
$route['404_override'] = 'error';

/*********** USER DEFINED ROUTES *******************/

$route['categoria/(:any)'] = 'servicio/categoria/$1';
// $route['categoria/(:any)/(:any)'] = 'servicio/categoriaSearch/$1/$2';
$route['detalleTour/(:any)'] = 'servicio/servicio/$1';
$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['registro'] = 'login/registro';

/**Seguridad */
$route['usuario'] = 'Usuario';

/**Catalogo */
$route['categoria'] = 'Catalogo/Categoria';
$route['empleado'] = 'Catalogo/Empleado';
$route['cliente'] = 'Catalogo/Cliente';
$route['estado-agenda'] = 'Catalogo/Estadoagenda';
$route['estado-cliente'] = 'Catalogo/Estadocliente';

/**Movimiento */
$route['agenda'] = 'Proceso/Agenda';
// $route['ingreso_nuevo'] = 'Movimiento/IngresoNuevo';
// $route['ingreso_save'] = 'Movimiento/IngresoSave';
// $route['salida'] = 'Movimiento/Salida';
// $route['salida_nuevo'] = 'Movimiento/SalidaNuevo';
// $route['salida_save'] = 'Movimiento/SalidaSave';
