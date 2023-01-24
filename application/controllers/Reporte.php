<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Reporte extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('util');
        $this->load->model('menu_model');
        $this->load->model('reporte_model');
        $this->load->model('articulo_model');
        $this->load->model('proveedor_model');
        $this->load->model('usuario_model');
        $this->load->model('categoria_model');
        $this->load->model('ingreso_model');
        $this->load->model('salida_model');
        $this->isLoggedIn();

        $this->global['gSubtitle'] = 'Seguridad';
    }

    public function index()
    {
        $this->lista();
    }
    function lista()
    {
    }
    function kardex()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Kardex';
        $data['articulos'] = $this->reporte_model->getKardex();
        $this->loadViews("reporte/kardex", $this->global, $data, NULL);
    }
    function Autorizacion()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Lista de Autorizaciones por Modalidades';
        $this->loadViews("reporte/autorizacion", $this->global, null, NULL);
    }
    function Valorizacion()
    {
        $this->global['pageTitle'] = PROYECTO .  ' : Lista de Autorizaciones por Modalidades';
        $data['articulos'] = $this->articulo_model->getAllCombo();
        $this->loadViews("reporte/valorizacion", $this->global, $data, NULL);
    }
    function Estadistico()
    {
        $colores = [
            "rgb(255, 99, 132)",
            "rgb(54, 162, 235)",
            "rgb(255, 205, 86)",
            "#00a65a",
            "#d2d6de",
            "#00c0ef",
            "#3c8dbc",
        ];
        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre"];
        $this->global['pageTitle'] = PROYECTO .  ' : Reporte estadistico';
        $data['cantidad_articulo'] = $this->articulo_model->getAllTotal("");
        $data['cantidad_proveedor'] = $this->proveedor_model->getAllTotal("");
        $data['cantidad_usuario'] = $this->usuario_model->getAllTotal("");
        $data['cantidad_categoria'] = $this->categoria_model->getAllTotal("");

        $articulo_categoria = $this->articulo_model->getAllByCategoria();
        $data['articulos'] = $articulo_categoria;
        $data['pie_colors'] = array_slice($colores, 0, sizeof($articulo_categoria));
        $ingresos = $this->ingreso_model->getResumen();
        $salidas = $this->salida_model->getResumen();
        $ingresos_salidas = array();
        for ($i = 1; $i <= 12; $i++) {
            $cantidad_ingreso = 0;
            $cantidad_salida = 0;
            foreach ($ingresos as  $item_ingreso) {
                if ($item_ingreso->idmes == $i) {
                    $cantidad_ingreso = $item_ingreso->cantidad;
                    break;
                }
            }
            foreach ($salidas as  $item_salida) {
                if ($item_salida->idmes == $i) {
                    $cantidad_salida = $item_salida->cantidad;
                    break;
                }
            }
            if ($cantidad_ingreso > 0 || $cantidad_salida > 0)
                $ingresos_salidas[] = array("mes" => $meses[$i - 1], "ingreso" => $cantidad_ingreso, "salida" => $cantidad_salida);
        }
        $data["ingresos_salidas"] = $ingresos_salidas;

        $this->loadViews("reporte/estadistico", $this->global, $data, NULL);
    }
}
