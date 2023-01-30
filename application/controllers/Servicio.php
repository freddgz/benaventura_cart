<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Servicio extends BaseController
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
    }
    public function categoriaSearch($cod_categoria, $s)
    {

        $filtro_subcategoria = "";
        $filtro_categoria = "";
        $cod_categoria = strtolower($cod_categoria);
        if (strpos($cod_categoria, PREFIX_CAT) !== false) {
            //filtro todos
            $categoria_nombre = str_replace(PREFIX_CAT, "", $cod_categoria);
            $categoria = $this->categoria_model->get_nombre($categoria_nombre);
            $data["categoria"] = $categoria;
            $data["subcategorias"] = $this->categoria_model->getAll_Subcateoria_IdCategoria($categoria->cod_categoria);
            $filtro_categoria = $categoria->cod_categoria;
            $filtro_subcategoria = "";
        } else {
            $subcategoria = $this->categoria_model->getSubcategoria_Nombre($cod_categoria);
            $data["categoria"] = $this->categoria_model->get($subcategoria->cod_categoria);
            $data["subcategorias"] = $this->categoria_model->getAll_Subcateoria_IdCategoria($subcategoria->cod_categoria);
            $filtro_categoria = $subcategoria->cod_categoria;
            $filtro_subcategoria = $subcategoria->cod_sub_cate;
        }
        $filtros = array();
        $filtros["categoria"] = $filtro_categoria;
        $filtros["subcategoria"] = $filtro_subcategoria;
        $data["filtro"] = $filtros;
        $data["search"] = $s;
        $data["duraciones"] = ARRAY_DURACION;
        $data["destinos"] = $this->servicio_model->getTop();
        $start = 0;
        $servicios = $this->servicio_model->getAllClean($filtro_categoria, $start);
        $data["servicios"] = $servicios;
        $data["total"] =  sizeof($servicios);
        $this->global['pageTitle'] = 'VenAventura : Inicio';
        $this->loadViews("servicios_filtro", $this->global, $data, NULL);
    }
    public function categoria($cod_categoria)
    {
        $this->categoriaSearch($cod_categoria, "");
    }
    public function servicio($cod_servicio)
    {
        $data["servicio"] = $this->servicio_model->get($cod_servicio);
        $data["restriccion"] = $this->servicio_model->getRestriccion($cod_servicio);
        $data["disponibilidad"] = $this->servicio_model->getDisponibilidad($cod_servicio);
        $data["itinerarios"] = $this->servicio_model->getItinerarios($cod_servicio);
        $data["galeria"] = $this->servicio_model->getGaleria($cod_servicio);
        $data["geo"] = $this->servicio_model->getGeo_x_Servicio($cod_servicio);
        $data["incluidos"] = $this->servicio_model->getIncluidos($cod_servicio);
        $data["excluidos"] = $this->servicio_model->getNoIncluidos($cod_servicio);

        $this->global['pageTitle'] = 'VenAventura : Inicio';
        $this->loadViews("servicio", $this->global, $data, NULL);
    }
}
