<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Catalogo extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('util');
        $this->load->model('menu_model');
        $this->isLoggedIn();
    }

    public function index()
    {
        $this->lista();
    }
    function lista()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Articulos';
        $this->loadViews("catalogo/articulo", $this->global, null, NULL);
    }
    function Cliente()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Agencia';
        $this->loadViews("catalogo/cliente", $this->global, null, NULL);
    }
    function Empleado()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Counter';
        $this->loadViews("catalogo/empleado", $this->global, null, NULL);
    }
    function Categoria()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Categorias';
        $this->loadViews("catalogo/categoria", $this->global, null, NULL);
    }
    function Estadoagenda()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Estado de Agenda';
        $this->loadViews("catalogo/estadoagenda", $this->global, null, NULL);
    }
    function Estadocliente()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Estado de Agencia';
        $this->loadViews("catalogo/estadocliente", $this->global, null, NULL);
    }
    function Tipodocumento()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Tipodocumento';
        $this->loadViews("catalogo/tipodocumento", $this->global, null, NULL);
    }
}
