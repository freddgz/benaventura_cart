
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/BaseController.php';

class Usuario extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('util');
        $this->load->model('usuario_model');
        $this->load->model('login_model');
    }
    public function add()
    {
        $nombre = $this->util->limpiar_cadena($_POST['us_nombre']);
        $apellido = $this->util->limpiar_cadena($_POST['us_apellido']);
        $run = $this->util->limpiar_cadena($_POST['us_run']);
        $direccion = $this->util->limpiar_cadena($_POST['us_direccion']);
        $email = $this->util->limpiar_cadena($_POST['us_email']);
        $telefono = $this->util->limpiar_cadena($_POST['us_telefono']);
        $contrasena = $this->util->limpiar_cadena($_POST['us_contrasena']);
        $conf_contrasena = $this->util->limpiar_cadena($_POST['us_conf_contrasena']);
        // $politica = $this->util->limpiar_cadena($_POST['politica']);
        $poli = isset($_POST['politica']) ? 1 : 0;
        // if ($politica == "on") {
        //     $poli = 1;
        // }
        $respuesta = "";
        if ($contrasena == $conf_contrasena) {
            // validamos que no haya duplicado de nombres y apellido
            $eva_nombres = $this->usuario_model->getByNombres($nombre, $apellido);
            if (!isset($eva_nombres["row"])) {
                // echo "nombres existenm";
                // evaluamos el run que no haya duplicados
                $eva_run = $this->usuario_model->getByNro($run);
                if (!isset($eva_run)) {
                    // evaluamos email que no haya duplicados
                    $eva_email =  $this->usuario_model->getByEmail($email);
                    if (!isset($eva_email)) {
                        // evaluamos que no haya duplicado de telefono
                        $eva_telefono =  $this->usuario_model->getByTelefono($telefono);
                        if (!isset($eva_telefono)) {
                            // if (!isset($_SESSION['usuario_invit']) && $_SESSION['usuario_invit'] !== "") {
                            //     $cod_usuario = $_SESSION['cliente'];
                            // } else {
                            // generamos codigo de usuario
                            $recuento = $this->usuario_model->getRecuento() + 1;
                            $cod_usuario = $this->util->generar_codigo_aleatorio('US', 10, $recuento);
                            // }
                            $cod_veri = $this->util->generar_codigo_aleatorio('VV', 7, $recuento);
                            // encriptamos contraseña
                            $contra_encrip = $this->util->encryption($contrasena);
                            // GUARDAMOS DATOS DE USUARIO EN UN ARRAY

                            $info = array(
                                "tipo_usurio" => 1,
                                'cod_usuario' => $cod_usuario,
                                'cod_verificacion' => $cod_veri,
                                "nombre" => $nombre,
                                "apellido" => $apellido,
                                "run" => $run,
                                // "id_region" => $departamento_invit,
                                // "id_provincia" => "",
                                // "id_comuna" => "",
                                "direccion" => $direccion,
                                "telefono" => $telefono,
                                "email" => $email,
                                "contrasena" => $contra_encrip,
                                "politica" => $poli,
                                "estado_verif" => 0,
                                "estado" => 1,
                            );
                            $insertar_registro = $this->usuario_model->insert($info);
                            if ($insertar_registro) {
                            } else {
                                $respuesta = "No pudimos registrarte.";
                            }
                        } else {
                            $respuesta = "El telefono ingresado ya se encuentra registrado.";
                        }
                    } else {
                        $respuesta = "El email $email ingresado ya se encuentra registrado.";
                    }
                } else {
                    $respuesta = "El RUN ingresado ya estan registrados.";
                }
            } else {
                $respuesta = "El nombre y apellido ingresado ya estan registrados.";
            }
        } else {
            $respuesta = "Las contraseñas ingresadas no coinsiden";
        }

        if ($respuesta == "") {
            echo json_encode(array(
                "status" => true,
                "message" => "",
            ));
        } else {
            echo json_encode(array(
                "status" => false,
                "message" => $respuesta,
            ));
        }
    }
    function getCombo()
    {
        $lista = $this->usuario_model->getCombo();
        $usuarios = array();
        array_push($usuarios, array("idusuario" => 0, "usuario" => "(Todos)"));
        foreach ($lista as $key => $row) {
            array_push($usuarios, array("idusuario" => $row->idusuario, "usuario" => $row->usuario));
        }
        json_output(200, $usuarios);
    }
    function getAll($page = 1, $query = '')
    {
        $query = urldecode($query);
        $total = $this->usuario_model->getAllTotal($query);
        $page_size = PAGE_SIZE;
        $registro = $this->usuario_model->getAll($query, ($page - 1) * $page_size, $page_size);
        json_output(200, array(
            "metadata" => array("page" => $page, "per_page" => $page_size, "total_count" => $total, "query" => $query),
            "records" => $registro
        ));
    }

    function send()
    {
        $data = json_decode(file_get_contents("php://input"));
        $info = array(
            "idrol" => $data->idrol,
            "usuario" => $data->usuario,
            "nombres" => $data->nombres,
            "apellidos" => $data->apellidos,
            "nrodocumento" => $data->nrodocumento,
            "clave" => getHashedPassword($data->nrodocumento),
            "telefono" => $this->util->if_obj_empty_blank($data, "telefono"),
            "direccion" => $this->util->if_obj_empty_blank($data, "direccion"),
        );

        if (isset($data->idusuario)) {
            $totalDoc = $this->usuario_model->checkTotalDocumento($data->usuario, $data->idusuario);
            if ($totalDoc == 0) {
                $result = $this->usuario_model->update($data->idusuario, $info);
                if ($result) {
                    json_output(200, array('status' => TRUE, 'item' => $this->usuario_model->get($data->idusuario)));
                } else {
                    json_output(200, array('status' => FALSE));
                }
            } else {
                json_output(200, array('status' => FALSE, 'message' => "El usuario <$data->usuario> ya existe!"));
            }
        } else {
            $totalDoc = $this->usuario_model->checkTotalDocumento($data->usuario);
            if ($totalDoc == 0) {
                $result = $this->usuario_model->insert($info);
                if ($result) {
                    $idNew = $this->usuario_model->getInsert_id();
                    json_output(200, array('status' => TRUE, 'id' => $idNew, 'item' => $this->usuario_model->get($idNew)));
                } else {
                    json_output(200, array('status' => FALSE));
                }
            } else {
                json_output(200, array('status' => FALSE, 'message' => "El usuario <$data->usuario> ya existe!"));
            }
        }
    }

    function delete()
    {
        $data = json_decode(file_get_contents("php://input"));
        $result = $this->usuario_model->delete($data->id);
        if ($result) {
            json_output(200, array('status' => TRUE));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }

    function activacion()
    {
        $data = json_decode(file_get_contents("php://input"));
        $result = $this->usuario_model->activacion($data->id, $data->estado);
        if ($result) {
            json_output(200, array('status' => TRUE, 'item' => $this->usuario_model->get($data->id)));
        } else {
            json_output(200, array('status' => FALSE));
        }
    }
    function change_password()
    {
        $idusuario = $this->session->userdata('idusuario');
        $data = json_decode(file_get_contents("php://input"));

        $user = $this->usuario_model->get($idusuario);
        $message = "";
        if (strcasecmp($data->password1, $data->password2) != 0)
            $message = "Las contraseñas no coinciden";
        else if (verifyHashedPassword($data->password0, $user->clave) == false)
            $message = "La contraseña es incorrecta";

        if (empty($message)) {
            $message = "Cambio de contraseña satisfactoria";
            $result = $this->usuario_model->update(
                $idusuario,
                array('clave' => getHashedPassword($data->password1))
            );
            if ($result) {
                json_output(200, array('status' => TRUE, 'message' => $message));
            } else {
                json_output(200, array('status' => false, 'message' => 'actualizacion fallida'));
            }
        } else {
            json_output(200, array('status' => false, 'message' => $message));
        }
    }
}
