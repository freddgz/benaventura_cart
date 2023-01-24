<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Agenda extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('util');
        $this->load->model('agenda_model');
    }
    function index()
    {
        echo "api/agenda";
    }
    function save()
    {
        $id = $this->input->post("id");
        $titulo = $this->input->post("titulo");
        $descripcion = $this->input->post("descripcion");
        $fechainicio = $this->input->post("fechainicio");
        $fechafin = $this->input->post("fechafin");
        $horainicio = $this->input->post("horainicio");
        $horafin = $this->input->post("horafin");
        $idcliente = $this->input->post("idcliente");
        $idempleado = $this->input->post("idempleado");
        $idcategoria = $this->input->post("idcategoria");
        $idestado = $this->input->post("idestado");

        $fechahora_inicio = $this->util->dformat_ymd($fechainicio) . " " . $horainicio;
        $fechahora_fin = $this->util->dformat_ymd($fechafin) . " " . $horafin;
        $info = array(
            "titulo" => $titulo,
            "descripcion" => $descripcion,
            "idcliente" => $idcliente,
            "idempleado" => $idempleado,
            "idcategoria" => $idcategoria,
            "idestado" => $idestado,
            "fechainicio" => $fechahora_inicio,
            "fechafin" => $fechahora_fin,
        );
        // json_output(200, $info);
        if ($id == 0) {
            $info += ["idusuariocreacion" => $this->session->userdata('idusuario')];
            $this->agenda_model->insert($info);
            json_output(200, array('status' => TRUE));
        } else {
            $this->agenda_model->update($id, $info);
            json_output(200, array('status' => TRUE));
        }
    }
    function saveIncidencia()
    {
        $id = $this->input->post("id");
        $incidencias = $this->input->post("incidencias");

        $info = array(
            "incidencias" => $incidencias,
        );
        $this->agenda_model->update($id, $info);
        json_output(200, array('status' => TRUE));
    }
    // function getAll($page = 1, $query = '')
    function getAll()
    {
        $idusuario = $_POST["idusuario"];
        $start = substr($_POST["start"], 0, 10);
        $end = substr($_POST["end"], 0, 10);
        $registro = $this->agenda_model->getAll($idusuario, $start, $end); 
        //$this->session->userdata('idusuario'));
        $events = array();
        foreach ($registro as $key => $row) {
            array_push($events, array(
                "id" => $row->idagenda,
                "title" => $row->titulo,
                "start" => $row->fechainicio,
                "end" => $row->fechafin,
                "backgroundColor" => $row->color
            ));
        }
        json_output(200, $events);
    }
    function get($id)
    {
        $registro = $this->agenda_model->get($id);
        json_output(200, $registro);
    }
    function getItems($id)
    {
        $registro = $this->agenda_model->getItems($id);
        json_output(200, $registro);
    }

    function delete($id)
    {
        $result = $this->agenda_model->delete($id);
        if ($result) {
            json_output(200, array('status' => TRUE));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }
}
