<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Reserva extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('servicio_model');
        $this->load->model('ubigeo_model');
        $this->load->model('usuario_model');
        $this->load->library('util');
    }

    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'VenAventura : Inicio';
        $data["regiones"] = $this->ubigeo_model->getRegiones();
        $this->loadViews("reserva", $this->global, $data, NULL);
    }
    public function registrar()
    {
        $run_invit = $_POST["run_invit"];
        $apellido_invit = $_POST["apellido_invit"];
        $name_invit = $_POST["name_invit"];
        $departamento_invit = $_POST["departamento_invit"];
        $direccion_invit = $_POST["direccion_invit"];
        $email_invit = $_POST["email_invit"];
        $telefono_invit = $_POST["telefono_invit"];
        $usuario_invitado = $this->usuario_model->getUsuarioInvitado($run_invit);
        $cod_usuario = "";
        $info = array(
            "tipo_usurio" => 2,
            "nombre" => $name_invit,
            "apellido" => $apellido_invit,
            "run" => $run_invit,
            "id_region" => $departamento_invit,
            // "id_provincia" => "",
            // "id_comuna" => "",
            "direccion" => $direccion_invit,
            "telefono" => $telefono_invit,
            "email" => $email_invit,
        );
        if (isset($usuario_invitado)) {
            $cod_usuario = $usuario_invitado->cod_usuario;
            $this->usuario_model->update($cod_usuario, $info);
        } else {
            $recuento = $this->usuario_model->getRecuento() + 1;
            $cod_usuario = $this->util->generar_codigo_aleatorio('US', 10, $recuento);
            $cod_veri = $this->util->generar_codigo_aleatorio('VV', 7, $recuento);

            $info["cod_usuario"] = $cod_usuario;
            $info["cod_verificacion"] = $cod_veri;
            $info["estado_verif"] = $cod_veri;
            $info["estado_verif"] = 0;
            $info["estado"] = 1;
            $this->usuario_model->insert($info);
        }
        //TODO: registrar reserva

        $this->cart->destroy();
        echo json_encode(array(
            "status" => false,
            "message" => json_encode($_POST),
            "nombre" => $_POST
        ));
    }
}
