<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Empleado extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('util');
        $this->load->library('session');
        $this->load->model('empleado_model');
        // $this->isLoggedIn();
    }

    function getAll($idusuario, $page = 1, $query = '')
    {
        if ($idusuario == -1)
            $idusuario = $this->session->userdata('idusuario');

        $query = urldecode($query);
        $total = $this->empleado_model->getAllTotal($idusuario, $query);
        $page_size = PAGE_SIZE;
        $registro = $this->empleado_model->getAll($idusuario, $query, ($page - 1) * $page_size, $page_size);
        json_output(200, array(
            "metadata" => array("page" => $page, "per_page" => $page_size, "total_count" => $total, "query" => $query),
            "records" => $registro,
            "idusuario" => $idusuario
        ));
    }

    function reporteDashBoard()
    {
        $data = json_decode(file_get_contents("php://input"));
        $registro = $this->empleado_model->reporteDashBoard($data->dni);
        json_output(200, $registro);
    }

    function getCombo($idcliente)
    {
        $registro = $this->empleado_model->getCombo($idcliente);
        json_output(200, $registro);
    }

    function send()
    {
        $data = json_decode(file_get_contents("php://input"));

        $info = array(
            "iddocumentoidentidad" => $data->iddocumentoidentidad,
            "nrodocumento" => $data->nrodocumento,
            "nombres" => $data->nombres,
            "apellidos" => $data->apellidos,
            "telefono" => $this->util->if_obj_empty_blank($data, "telefono"),
            "whatsapp" => $this->util->if_obj_empty_blank($data, "whatsapp"),
            "correo" => $this->util->if_obj_empty_blank($data, "correo"),
            "nota" => $this->util->if_obj_empty_blank($data, "nota"),
            "idcliente" => $data->idcliente,
        );
        if (isset($data->idempleado)) { //edit
            $totalDoc = $this->empleado_model->checkTotalDocumento($data->nrodocumento, $data->idempleado);
            if ($totalDoc == 0) {
                $result = $this->empleado_model->update($data->idempleado, $info);
                if ($result) {
                    json_output(200, array('status' => TRUE, 'item' => $this->empleado_model->get($data->idempleado)));
                } else {
                    json_output(200, array('status' => FALSE));
                }
            } else {
                json_output(200, array('status' => FALSE, 'message' => "El usuario $data->nrodocumento ya existe!"));
            }
        } else { //insert
            $totalDoc = $this->empleado_model->checkTotalDocumento($data->nrodocumento);
            if ($totalDoc == 0) {
                $result = $this->empleado_model->insert($info);
                if ($result) {
                    $idNew = $this->empleado_model->getInsert_id();
                    json_output(200, array('status' => TRUE, 'id' => $idNew, 'item' => $this->empleado_model->get($idNew)));
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
        $result = $this->empleado_model->delete($data->id);
        if ($result) {
            json_output(200, array('status' => TRUE));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }
    function activacion()
    {
        $data = json_decode(file_get_contents("php://input"));
        $result = $this->empleado_model->activacion($data->id, $data->estado);
        if ($result) {
            json_output(200, array('status' => TRUE, 'item' => $this->empleado_model->get($data->id)));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }
}
