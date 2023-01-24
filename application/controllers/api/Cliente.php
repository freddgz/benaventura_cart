<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Cliente extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('util');
        $this->load->library('session');
        $this->load->model('cliente_model');
        // $this->isLoggedIn();
    }

    function getAll($idusuario, $page = 1, $query = '')
    {
        if ($idusuario == -1)
            $idusuario = $this->session->userdata('idusuario');

        $query = urldecode($query);
        $total = $this->cliente_model->getAllTotal($idusuario, $query);
        $page_size = PAGE_SIZE;
        $registro = $this->cliente_model->getAll($idusuario, $query, ($page - 1) * $page_size, $page_size);
        json_output(200, array(
            "metadata" => array("page" => $page, "per_page" => $page_size, "total_count" => $total, "query" => $query),
            "records" => $registro,
            "idusuario" => $idusuario
        ));
    }
    function reporteByEmpresa($asocod)
    {
        $registro = $this->cliente_model->reporteByEmpresa($asocod);
        json_output(200, $registro);
    }
    function reporteDashBoard()
    {
        $data = json_decode(file_get_contents("php://input"));
        $registro = $this->cliente_model->reporteDashBoard($data->dni);
        json_output(200, $registro);
    }
    function getCombo($idusuario)
    {
        $registro = $this->cliente_model->getCombo($idusuario);
        json_output(200, $registro);
    }

    function send()
    {
        $data = json_decode(file_get_contents("php://input"));

        $info = array(
            "iddocumentoidentidad" => $data->iddocumentoidentidad,
            "nrodocumento" => $data->nrodocumento,
            "razonsocial" => $data->razonsocial,
            "nombrecomercial" => $this->util->if_obj_empty_blank($data, "nombrecomercial"),
            "idcategoria" => $data->idcategoria,
            "contacto" => $this->util->if_obj_empty_blank($data, "contacto"),
            "gerente" => $this->util->if_obj_empty_blank($data, "gerente"),
            "telefono" => $this->util->if_obj_empty_blank($data, "telefono"),
            "whatsapp" => $this->util->if_obj_empty_blank($data, "whatsapp"),
            "correo" => $this->util->if_obj_empty_blank($data, "correo"),
            "direccion" => $this->util->if_obj_empty_blank($data, "direccion"),
        );
        if (isset($data->idcliente)) { //edit
            $totalDoc = $this->cliente_model->checkTotalDocumento($data->nrodocumento, $data->idcliente);
            if ($totalDoc == 0) {
                $result = $this->cliente_model->update($data->idcliente, $info);
                if ($result) {
                    json_output(200, array('status' => TRUE, 'item' => $this->cliente_model->get($data->idcliente)));
                } else {
                    json_output(200, array('status' => FALSE));
                }
            } else {
                json_output(200, array('status' => FALSE, 'message' => "El usuario $data->nrodocumento ya existe!"));
            }
        } else { //insert
            $info += ["idusuariocreacion" => $this->util->if_obj_empty_blank_else($data, "idusuariocreacion", $this->session->userdata('idusuario'))];
            $totalDoc = $this->cliente_model->checkTotalDocumento($data->nrodocumento);
            if ($totalDoc == 0) {
                $result = $this->cliente_model->insert($info);
                if ($result) {
                    $idNew = $this->cliente_model->getInsert_id();
                    json_output(200, array('status' => TRUE, 'id' => $idNew, 'item' => $this->cliente_model->get($idNew)));
                } else {
                    json_output(200, array('status' => FALSE));
                }
            } else {
                json_output(200, array('status' => FALSE, 'message' => "El usuario $data->nrodocumento ya existe!"));
            }
        }
    }

    function delete()
    {
        $data = json_decode(file_get_contents("php://input"));
        $result = $this->cliente_model->delete($data->id);
        if ($result) {
            json_output(200, array('status' => TRUE));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }
    function activacion()
    {
        $data = json_decode(file_get_contents("php://input"));
        $result = $this->cliente_model->activacion($data->id, $data->estado);
        if ($result) {
            json_output(200, array('status' => TRUE, 'item' => $this->cliente_model->get($data->id)));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }
}
