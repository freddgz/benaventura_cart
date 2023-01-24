<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Rol extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('rol_model');
    }
    function getAll()
    {
        $registro = $this->rol_model->getAll();
        json_output(200, $registro);
    }

    function send()
    {
        $data = json_decode(file_get_contents("php://input"));

        if (isset($data->idrol)) {
            $info = array(
                "nombre" => $data->nombre
            );

            $result = $this->rol_model->update($data->idrol, $info);
            if ($result) {
                json_output(200, array('status' => TRUE, 'item' => $this->rol_model->get($data->idrol)));
            } else {
                json_output(200, array('status' => FALSE));
            }
        } else {
            $info = array(
                "nombre" => $data->nombre
            );
            $result = $this->rol_model->insert($info);
            if ($result) {
                $idrol = $this->rol_model->getInsert_id();
                json_output(200, array('status' => TRUE, 'id' => $idrol, 'item' => $this->rol_model->get($idrol)));
            } else {
                json_output(200, array('status' => FALSE));
            }
        }
    }

    function delete()
    {
        $data = json_decode(file_get_contents("php://input"));

        $total = $this->rol_model->checkTotalUsuarios($data->id);
        if ($total > 0) {
            json_output(200, array('status' => FALSE, 'message' => 'El rol esta siendo utilizado'));
        } else {
            $result =  $this->rol_model->delete($data->id);
            if ($result) {
                json_output(200, array('status' => TRUE));
            } else {
                json_output(200, array('status' => FALSE));
            }
        }
    }
}
