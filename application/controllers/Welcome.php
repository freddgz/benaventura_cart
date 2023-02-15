<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Welcome extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('servicio_model');
    }

    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $categorias = $this->categoria_model->getAll_ConServicio();
        foreach ($categorias as $index => $row) {
            $servicios = $this->servicio_model->getAll_x_categoria($row->cod_categoria);
            foreach ($servicios as $_index => $_row) {
                $_row->geo = $this->servicio_model->getGeo_x_Servicio($_row->cod_servicio);
            }
            $row->servicios = $servicios;
        }
        $data["categorias"] = $categorias;
        $data["servicios_top"] = $this->servicio_model->getTop();
        $this->global['pageTitle'] = "Inicio : " . PROYECTO;
        $this->loadViews("welcome", $this->global, $data, NULL);
    }
}
