<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Usuario extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('util');
        $this->load->model('menu_model');
        $this->isLoggedIn();

        $this->global['gSubtitle'] = 'Seguridad';
    }

    public function index()
    {
        $this->lista();
    }

    function lista()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Usuarios';
        $this->loadViews("seguridad/usuario", $this->global, null, NULL);
    }
}
