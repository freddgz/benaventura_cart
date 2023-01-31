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
        $this->load->model('reservacion_model');
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

        $cod_usuario = "";
        if ($this->session->userdata('isLoggedIn') !== null) {
            $cod_usuario = $this->session->userdata('cod_usuario');
        } else {
            $run_invit = $_POST["run_invit"];
            $apellido_invit = $_POST["apellido_invit"];
            $name_invit = $_POST["name_invit"];
            $departamento_invit = $_POST["departamento_invit"];
            $direccion_invit = $_POST["direccion_invit"];
            $email_invit = $_POST["email_invit"];
            $telefono_invit = $_POST["telefono_invit"];
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

            $usuario_invitado = $this->usuario_model->getUsuarioInvitado($run_invit);
            if (isset($usuario_invitado)) {
                $cod_usuario = $usuario_invitado->cod_usuario;
                $this->usuario_model->update($cod_usuario, $info);
            } else {
                $recuento = $this->usuario_model->getRecuento() + 1;
                $cod_usuario = $this->util->generar_codigo_aleatorio('US', 10, $recuento);
                $cod_veri = $this->util->generar_codigo_aleatorio('VV', 7, $recuento);

                $info["cod_usuario"] = $cod_usuario;
                $info["cod_verificacion"] = $cod_veri;
                $info["estado_verif"] = 0;
                $info["estado"] = 1;
                $this->usuario_model->insert($info);
            }
        }
        //registrar reserva
        $recuento_reservacion = $this->reservacion_model->getRecuento();
        $cod_reservacion = $this->util->generar_codigo_aleatorio('RE', 35, $recuento_reservacion);
        $cod_servicio = "";
        $cod_cliente = "";
        // $servicio = $this->servicio_model->get($cod_se);
        $nro_personas = 0;
        foreach ($this->cart->contents() as $row) {
            $_item = $row["item"];
            $cod_servicio = $row["id"];
            $nro_personas += $_item["personas"];
            $cod_cliente = $_item["cod_cliente"];
            $costo_servicio = $row["price"];
        }
        $costo_servicio = 0;
        $subtotal = $nro_personas * $costo_servicio;
        $igv = $subtotal * 0.18;
        $total = $subtotal + $igv;
        $info = array(
            "cod_reservacion" => $cod_reservacion,
            "cod_servicio" => $cod_servicio,
            "cod_cliente" => $cod_cliente,
            "cod_usuario" => $cod_usuario,
            "fecha_reserva" => date('Y-m-d'),
            "hora_reserva" => date('H:m'),
            "nro_personas" => $nro_personas,
            "tipo_costo" => 2,
            "costo_servicio" => $costo_servicio,
            "subtotal" => $nro_personas * $costo_servicio,
            "igv" => $igv,
            "total" => 0,
            "estado" => 1,
            "fecha_reg" => date('Y-m-d H:m'),
        );

        $this->reservacion_model->insert($info);


        $this->cart->destroy();
        echo json_encode(array(
            "status" => true,
            "message" => "Reservacion $cod_reservacion registrada satisfactoriamente",
        ));
    }
}
