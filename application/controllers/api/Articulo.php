<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Articulo extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('util');
        $this->load->model('articulo_model');
    }

    function getAll($page = 1, $query = '')
    {
        $query = urldecode($query);
        $total = $this->articulo_model->getAllTotal($query);
        $page_size = PAGE_SIZE;
        $registro = $this->articulo_model->getAll($query, ($page - 1) * $page_size, $page_size);
        json_output(200, array(
            "metadata" => array("page" => $page, "per_page" => $page_size, "total_count" => $total, "query" => $query),
            "records" => $registro
        ));
    }
    function getAllCombo()
    {
        $registro = $this->articulo_model->getAllCombo();
        json_output(200, $registro);
    }

    function send()
    {
        $data = json_decode(file_get_contents("php://input"));

        $info = array(
            "descripcion" => $data->descripcion,
            "codigobarras" => $data->codigobarras,
            "idmarca" => $data->idmarca,
            "idcategoria" => $data->idcategoria,
            "idproveedor" => $data->idproveedor,
            "idunidadmedida" => $data->idunidadmedida,
            "costo" => $data->costo,
            "precio" => $data->precio,
            "stock" => $data->stock,
            "minimo" => $data->minimo,
        );

        if (isset($data->idarticulo)) {
            $result = $this->articulo_model->update($data->idarticulo, $info);
            if ($result) {
                json_output(200, array('status' => TRUE, 'item' => $this->articulo_model->get($data->idarticulo)));
            } else {
                json_output(200, array('status' => FALSE));
            }
        } else {
            $result = $this->articulo_model->insert($info);
            $idNew = $this->articulo_model->getInsert_id();
            if ($result) {
                json_output(200, array('status' => TRUE, 'id' => $idNew, 'item' => $this->articulo_model->get($idNew)));
            } else {
                json_output(200, array('status' => FALSE));
            }
        }
    }

    function delete()
    {
        $data = json_decode(file_get_contents("php://input"));
        $result = $this->articulo_model->delete($data->id);
        if ($result) {
            json_output(200, array('status' => TRUE));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }
}
