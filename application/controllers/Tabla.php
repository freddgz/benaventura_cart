<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Tabla extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('util');
        $this->load->model('tabla_model');
        $this->isLoggedIn();
    }

    public function index($idtabla)
    {
        //        $this->lista($idtabla);
    }

    function lista($idtabla)
    {
        $subtitle = "";
        $icon = "";
        if ($idtabla == 10 || $idtabla == 11) {
            $subtitle = 'Catálogo';
            $icon = 'nc-icon nc-book-bookmark';
        } else if ($idtabla == 3 || $idtabla == 5) {
            $subtitle = 'Personal';
            $icon = 'fa fa-users';
        } else if ($idtabla == 7) {
            $subtitle = 'Almacén';
            $icon = 'nc-icon nc-app';
        }
        $this->global['gSubtitle'] = $subtitle;
        $this->global['gIcon'] = $icon;

        $tabla = $this->tabla_model->get($idtabla);
        $this->global['pageTitle'] =  $tabla->descripcion;
        $data['tabla'] = $tabla;
        $this->loadViews("tablamaestra", $this->global, $data, NULL);
    }
}
