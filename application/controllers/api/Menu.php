<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Menu extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('menu_model');
    }
    function getAll()
    {
        $registro = $this->menu_model->getAll();
        json_output(200, $registro);
    }
    function getPermisos($idrol = 0)
    {
        $menus = $this->menu_model->getAll();
        $registro = array();
        $permisos = array();
        if ($idrol > 0) {
            $permisos = $this->menu_model->getPermisos($idrol, false);
        }
        foreach ($menus as $key => $row) {
            $selected = false;
            foreach ($permisos as $key2 => $row2) {
                if ($row->idmenu == $row2->idmenu) {
                    $selected = true;
                    break;
                }
            }
            array_push($registro, array(
                "id" => $row->idmenu,
                "parent" => $row->idmenupadre == 0 ? "#" : $row->idmenupadre,
                "text" => $row->nombre,
                "icon" => "fa " . $row->icon,
                "state" => array("opened" => true, "selected" => $selected),
            ));
        }
        json_output(200, $registro);
    }

    function send()
    {
        $data = json_decode(file_get_contents("php://input"));
        $result = $this->menu_model->deleteByPerfil($data->idrol);
        foreach ($data->menus as $idmenu) {
            $info = array(
                "idmenu" => $idmenu,
                "idrol" => $data->idrol,
            );
            $this->menu_model->insertPermiso($info);
        }
        if ($result) {
            json_output(200, array('status' => TRUE));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }

    function delete()
    {
        $data = json_decode(file_get_contents("php://input"));
        $result = $this->menu_model->delete($data->id);
        if ($result) {
            json_output(200, array('status' => TRUE));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }
}
