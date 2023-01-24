<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Rol extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('util');
        $this->load->model('rol_model');
        $this->load->model('menu_model');
        $this->isLoggedIn();

        $this->global['gSubtitle'] = 'Orden Trabajo';
    }

    public function index()
    {
        $this->lista();
    }

    function lista()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Tipos de Usuarios';
        $this->loadViews("seguridad/rol", $this->global, null, NULL);
    }
    function permiso()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Árbol de Permisos';
        $this->loadViews("seguridad/permiso", $this->global, null, NULL);
    }
}
