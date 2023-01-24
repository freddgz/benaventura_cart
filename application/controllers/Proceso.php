<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Proceso extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('util');
        $this->load->model('menu_model');
        $this->load->model('tabla_model');
        $this->load->model('cliente_model');
        $this->load->model('usuario_model');
        $this->isLoggedIn();
    }

    public function index()
    {
        $this->Agenda();
    }
    function Agenda()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Agenda';
        $data["categorias"] = $this->tabla_model->getTabla(3);
        $data["estados"] = $this->tabla_model->getTabla(4);
        $data["clientes"] = $this->cliente_model->getCombo($this->session->userdata('idusuario'));
        $data["usuarios"] = $this->usuario_model->getCombo();
        $this->loadViews("proceso/agenda", $this->global, $data, NULL);
    }
    // function IngresoNuevo()
    // {
    //     $this->global['pageTitle'] = PROYECTO .  ' : Nuevo Ingreso';
    //     $data["proveedores"] = $this->proveedor_model->getCombo();
    //     $data["documentos"] = $this->tipodocumento_model->getCombo();

    //     $this->loadViews("movimiento/ingreso_nuevo", $this->global, $data, NULL);
    // }
    // public function IngresoSave()
    // {

    //     $idproveedor = $this->input->post('idproveedor');
    //     $fecha = $this->util->dformat_ymd($this->input->post('fecha'));
    //     $idtipodocumento = $this->input->post('idtipodocumento');
    //     $serie_documento = $this->input->post('serie_documento');
    //     $numero_documento = $this->input->post('numero_documento');
    //     $detalle = json_decode($this->input->post('detalle'));

    //     $total = 0;
    //     foreach ($detalle as  $item) {
    //         $total += ($item->cantidad * $item->precio);
    //     }
    //     $info = array(
    //         "idproveedor" => $idproveedor,
    //         "idusuario" => $this->id_usuario,
    //         "idtipodocumento" => $idtipodocumento,
    //         "seriedocumento" => $serie_documento,
    //         "nrodocumento" => $numero_documento,
    //         "fecha" => $fecha,
    //         "total" => $total,
    //     );
    //     $this->ingreso_model->insert($info);
    //     $idingreso_new = $this->ingreso_model->getInsert_id();

    //     foreach ($detalle as  $item) {
    //         $info = array(
    //             "idingreso" => $idingreso_new,
    //             "idarticulo" => $item->idarticulo,
    //             "cantidad" => $item->cantidad,
    //             "precio" => $item->precio,
    //         );
    //         $this->ingreso_model->insertDetalle($info);
    //     }
    //     redirect('ingreso');
    // }
}
