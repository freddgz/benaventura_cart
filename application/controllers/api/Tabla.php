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
    }

    public function index($idtabla)
    {
    }


    /*WEB SERVICES*/
    public function getTablaDetail($id)
    {
        $hasValue = false;
        $item_has_value = $this->tabla_model->getItem(1000, 1000);
        if (strpos($item_has_value->valor, $id) !== false) {
            $hasValue = true;
        }
        $header = $this->tabla_model->get($id);
        $detail = $this->tabla_model->getTabla($id);
        json_output(200, array(
            "has_value" => $hasValue,
            "header" => $header,
            "detail" => $detail
        ));
    }
    function getTree()
    {
        $registro = $this->tabla_model->getTree();
        json_output(200, $registro);
    }
    function itemChangeStatus()
    {
        $data = json_decode(file_get_contents("php://input"));
        $new_activo = $data->activo == 0 ? 1 : 0;
        $result = $this->tabla_model->updateItem($data->id, array("activo" => $new_activo));
        if ($result) {
            json_output(200, array('status' => TRUE, 'item' => $this->tabla_model->getItemById($data->id)));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }
    function itemDelete()
    {
        $data = json_decode(file_get_contents("php://input"));
        $result = $this->tabla_model->deleteItem($data->id);
        if ($result) {
            json_output(200, array('status' => TRUE));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }

    function getTabla($id)
    {
        $registro = $this->tabla_model->getTabla($id);
        json_output(200, $registro);
    }
    function getTablaPagged($idtabla, $page = 1, $query = '')
    {
        $query = urldecode($query);
        $total = $this->tabla_model->getAllTotal($idtabla, $query);
        $page_size = PAGE_SIZE;
        $registro = $this->tabla_model->getTablaPagged($idtabla, $query, ($page - 1) * $page_size, $page_size);
        json_output(200, array(
            "metadata" => array("page" => $page, "per_page" => $page_size, "total_count" => $total, "query" => $query),
            "records" => $registro
        ));
    }
    function send()
    {
        $data = json_decode(file_get_contents("php://input"));
        $idtabla = $data->idtabla;
        $valor = isset($data->valor) ? $data->valor : "";

        if (isset($data->id)) { //update
            $info = array(
                "descripcion" => $data->descripcion,
                "valor" => $valor
            );
            $result = $this->tabla_model->updateItem($data->id, $info);

            if ($result) {
                json_output(200, array('status' => TRUE, 'item' => $this->tabla_model->getItemById($data->id)));
            } else {
                json_output(200, array('status' => FALSE));
            }
        } else if (isset($data->idcolumna)) { //update by  columna
            $info = array(
                "descripcion" => $data->descripcion,
                "valor" => $valor
            );
            $result = $this->tabla_model->update($idtabla, $data->idcolumna, $info);
            if ($result) {
                json_output(200, array('status' => TRUE, 'item' => $this->tabla_model->getItem($idtabla, $data->idcolumna)));
            } else {
                json_output(200, array('status' => FALSE));
            }
        } else if ($idtabla == 0) { //insert tabla
            $idtabla = $this->tabla_model->getNewIdTabla();
            $info = array(
                "idtabla" => $idtabla,
                "idcolumna" => 0,
                "valor" => $valor,
                "descripcion" => $data->descripcion
            );
            $result = $this->tabla_model->insert($info);
            if ($result) {
                $id = $this->tabla_model->getInsert_id();
                json_output(200, array('status' => TRUE, 'item' => $this->tabla_model->getItemById($id)));
            } else {
                json_output(200, array('status' => FALSE));
            }
        } else { //insert columna
            $idcolumna = $this->tabla_model->getNewIdColumna($idtabla);
            $info = array(
                "idtabla" => $idtabla,
                "idcolumna" => $idcolumna,
                "valor" => $valor,
                "descripcion" => $data->descripcion
            );
            $result = $this->tabla_model->insert($info);
            if ($result) {
                $id = $this->tabla_model->getInsert_id();
                json_output(200, array('status' => TRUE, 'id' => $idcolumna, 'item' => $this->tabla_model->getItemById($id)));
            } else {
                json_output(200, array('status' => FALSE));
            }
        }
    }
    function delete()
    {
        $data = json_decode(file_get_contents("php://input"));
        if (isset($data->id)) {
            $tabla = $this->tabla_model->getItemById($data->id);
            if ($tabla->idtabla == 3) { //categoria
                if ($this->tabla_model->countUsedCategoria($tabla->idcolumna) > 0) {
                    json_output(200, array('status' => FALSE, 'message' => "La Categoria esta siendo utilizada"));
                    return;
                }
            } else if ($tabla->idtabla == 4) { //estado
                if ($this->tabla_model->countUsedEstadoAgenda($tabla->idcolumna) > 0) {
                    json_output(200, array('status' => FALSE, 'message' => "El Estado esta siendo utilizado"));
                    return;
                }
            } else if ($tabla->idtabla == 5) { //estado cliente
                if ($this->tabla_model->countUsedEstadoCliente($tabla->idcolumna) > 0) {
                    json_output(200, array('status' => FALSE, 'message' => "El Estado esta siendo utilizado"));
                    return;
                }
            }
            $result = $this->tabla_model->deletebyid($data->id);
            if ($result) {
                json_output(200, array('status' => TRUE));
            } else {
                json_output(200, array('status' => FALSE));
            }
        } else {
            $result = $this->tabla_model->delete($data->idtabla, $data->idcolumna);
            if ($result) {
                json_output(200, array('status' => TRUE));
            } else {
                json_output(200, array('status' => FALSE));
            }
        }
    }

    /*elementos por modulo */
    function getTablaByValor($id, $valor)
    {
        $registro = $this->tabla_model->getTablaByValor($id, $valor);
        $data = array();
        foreach ($registro as $item) {
            array_push($data, array(
                'idcolumna' => $item->idcolumna,
                'valor' => $item->valor,
                'descripcion' => $item->descripcion
            ));
        }
        json_output(200, $data);
    }
    function getTablaByIds()
    {
        $data = json_decode(file_get_contents("php://input"));
        $registro = $this->tabla_model->getTablaByIds($data->idtabla, $data->ids);
        $data = array();
        foreach ($registro as $item) {
            array_push($data, array(
                'idcolumna' => $item->idcolumna,
                'valor' => $item->valor,
                'descripcion' => $item->descripcion
            ));
        }
        json_output(200, $data);
    }
}
