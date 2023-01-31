<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Servicio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('util');
        $this->load->model('servicio_model');
        // $this->isLoggedIn();
    }

    public function addCart()
    {
        $cod_servicio = $_POST["cod_servicio"];
        $servicio = $this->servicio_model->get($cod_servicio);
        $total = $_POST["total"];
        $item = array(
            "cod_cliente" => $_POST["cod_cliente"],
            "descripcion" => $_POST["descripcion"],
            "personas" => $_POST["personas"],
            "fecha_reserva" => $_POST["fecha_reserva"],
            "ninos_menores" => $_POST["ninos_menores"],
            "ninos_mayores" => $_POST["ninos_mayores"],
            "adultos" => $_POST["adultos"],
            "adultos_mayores" => $_POST["adultos_mayores"],
        );

        $cast = [
            'id' => $cod_servicio,
            'qty' => 1,
            'price' => $total,
            'name' => $servicio->titulo,
            'image' =>  $servicio->img_portada,
            'item' => $item,
        ];

        if ($this->cart->insert($cast))
            $this->showCart();
        else
            echo json_encode(array(
                "status" => false,
                "message" => "error al agregar en el carrito",
            ));
    }
    private function showCart()
    {
        $carts = $this->cart->contents();
        // $array = [];
        $output = "";

        $output .= "<div class='card-header py-3 px-5 bg-white'>
            <span class='font-weight-semi-bold'>Tu Cesta</span>
        </div>";
        $output .= "<div class='card-body p-0'>";
        $total = 0;
        $recuento = 0;
        foreach ($carts as $item) {
            $total +=  $item['subtotal'];
            $recuento++;
            $output .= " <div class='px-2 px-md-3 py-2 py-md-1'>
                <div class='media p-2 p-md-3 row'>
                <div class=' col-3 u-avatar u-lg-avatar-md mr-2 mr-md-3'>
                   <img class='img-fluid rounded-pill' src='" . SERVER_IMG . "portada/" . $item["image"] . "' alt='Image Description'> 
                </div>
                <div class=' col-9 media-body position-relative pl-md-1'>
                    <div class='d-flex justify-content-between align-items-start mb-2 mb-md-3'>
                    <span class='d-block text-dark font-weight-bold'>" . ucfirst($item['name']) . "</span>
                    <button type='button' class='close close-rounded position-md-absolute right-0 ml-2' aria-label='Close'>
                        <i class='icon-trash'></i>
                    </button>
                    </div>
                    <span class='d-block text-gray-1'>Precio $ " . $item['subtotal'] . " </span>
                </div>
                </div>
            </div>";
            // $array[$cart['rowid']] = [
            //     'id' => $cart['id'],
            //     'qty' => $cart['qty'],
            //     'price' => $this->cart->format_number($cart['price']),
            //     'name' => $cart['name'],
            //     'subtotal' => $this->cart->format_number($cart['subtotal']),
            //     'rowid' => $cart['rowid']
            // ];
        }

        $output .= "</div>
            <div class='card-footer border-0 p-3 px-md-5 py-md-4'>
            <div class='mb-4 pb-md-1'>
            <span class='d-block font-weight-semi-bold'>Subtotal: $ " . $total . "</span>
            </div>
            <div class='d-flex button-inline-group-md mb-1'>
            <a class='button px-30 fw-400 text-14 -blue-1 bg-blue-1 h-50 text-white' href='" . base_url() . "carrito'>
                Ver Carrito
            </a>
            <a class='button px-30 fw-400 text-14 -outline-blue-1 h-50 text-blue-1 ml-20' href='" . base_url() . "reserva'>
                Reservar
            </a>
            </div>
        </div>";
        echo json_encode(array(
            "status" => true,
            "recuento" => $recuento,
            "total" => $total,
            "html" => $output,
        ));
    }
    public function showEditCart()
    {
        $rowid = $_POST["rowid"];
        $cart = $this->cart->get_item($rowid);
        $output = "";

        $cod_servicio = $cart["id"];
        $item_cart = $cart["item"];
        $servicio = $this->servicio_model->get($cod_servicio);
        $restriccion = $this->servicio_model->getRestriccion($cod_servicio);
        $disponibilidad = $this->servicio_model->getDisponibilidad($cod_servicio);

        $titulo = mb_strtoupper($servicio->titulo);
        $cod_servicio = $servicio->cod_servicio;
        $descripcion = $servicio->descripcion;
        $categoria = $servicio->cod_categoria;
        $sub_categoria = $servicio->cod_subcategori;
        // $subCategoria=$cate->get_subcate_categoria_controlador($categoria);
        $id_costo = $servicio->id_tipo_costo;
        $costo = $servicio->costo;
        $portada = $servicio->img_portada;
        $video = $servicio->video_servis;
        $duracion = $servicio->duracion;
        $medida_duracion = $servicio->medida_duracion;
        $idio = [];
        $idio = explode(",", $servicio->idiomas);
        // 
        $cod_disponibilidad = $servicio->disponibilidad;
        $reservar_cuando = $servicio->reservar_cuando;
        $medida_cuando = $servicio->medida_cuando;
        $personas_minima = $servicio->personas_minima;
        // incluye

        $incluye_hospedaje = $servicio->incluye_hotel;
        $incluye_transporte = $servicio->incluye_transporte;
        $incluye_recojo = $servicio->incluye_recojo;


        $ninos_menores = $restriccion->ninos_menores;
        $ninos_mayores = $restriccion->ninos_mayores;
        $adultos_mayores = $restriccion->adultos_mayores;

        // edades niños menores
        $edad_min_ninmen = $restriccion->edad_min_ninmen;
        $edad_max_ninmen = $restriccion->edad_max_ninmen;
        // edades niños mayores
        $edad_min_ninmay = $restriccion->edad_min_ninmay;
        $edad_max_ninmay = $restriccion->edad_max_ninmay;
        // edad adultos
        $edad_min_adultos = $restriccion->edad_min_adultos;
        $edad_max_adultos = $restriccion->edad_max_adultos;
        // edad adultos mayores
        $edad_min_admay = $restriccion->edad_min_admay;
        $edad_max_admay = $restriccion->edad_max_admay;

        if ($ninos_menores == 1 && $ninos_mayores == 1) {
            $edad_minimo = $restriccion->edad_min_ninmen;
        } elseif ($ninos_menores == 0 && $ninos_mayores == 1) {
            $edad_minimo = $restriccion->edad_min_ninmay;
        } else {
            $edad_minimo = $restriccion->edad_min_adultos;
        }


        $hora_inicio = "";
        $hora_fin = "";
        $fecha_inicio = "";
        $fecha_fin = "";

        $fecha_disponible = "";
        $valor_dia = 0;
        $ray_disponible = array();
        $fecha_inicio = $disponibilidad->fecha_inicio;
        $fecha_fin = date("Y-m-d", strtotime($fecha_inicio . "+ 1 year"));


        $output .= '
        <form id="form_reserva">
        <input type="hidden" name="cod_servicio" id="cod_servicio" value="' . $cod_servicio . '">
        <input type="hidden" name="accion" value="update">
        <input type="hidden" name="rowid" value="' . $rowid . '">

        <div class="row y-gap-20 pt-30">
        <div class="col-12">
            <div class="px-20 py-10 border-light rounded-4 -right">

                <div data-x-dd-click="">';
        switch ($cod_disponibilidad) {
            case '1':
                #todo los dias
                $texto = "Todo los dias.";
                $fechaInicio = strtotime(date("Y-m-d"));
                $fechaFin = strtotime($fecha_fin);
                for ($i = $fechaInicio; $i <= $fechaFin; $i += 86400) {
                    $fecha_disponible = date("Y-m-d", $i);
                    array_push($ray_disponible, $fecha_disponible);
                }
                break;
            case '2':
                # solo dias de semana
                $texto = "Solo dias de semana.";
                $fechaInicio = strtotime(date("Y-m-d"));
                $fechaFin = strtotime($fecha_fin);
                for ($i = $fechaInicio; $i <= $fechaFin; $i += 86400) {
                    $fecha_disponible = date("Y-m-d", $i);
                    $valor_dia = date('w', strtotime($fecha_disponible));
                    if ($valor_dia !== "0" && $valor_dia !== "1") {
                        array_push($ray_disponible, $fecha_disponible);
                    }
                }
                break;
            case '3':
                # solo fines de semana
                $texto = "Solo fines de semana.";
                $fechaInicio = strtotime(date("Y-m-d"));
                $fechaFin = strtotime($fecha_fin);
                for ($i = $fechaInicio; $i <= $fechaFin; $i += 86400) {
                    $fecha_disponible = date("Y-m-d", $i);
                    $valor_dia = date('w', strtotime($fecha_disponible));
                    if ($valor_dia == 0 || $valor_dia == 1) {
                        array_push($ray_disponible, $fecha_disponible);
                    }
                }
                break;
            case '4':
                # solo feriados
                break;
            case '5':
                // personalizado
                break;
            default:
                # code...
                break;
        }
        $fecha_reserva = $this->util->obtener_fecha_format_text($item_cart["fecha_reserva"]);
        $output .= '
                    <h4 class="text-15 fw-500 ls-2 lh-16">Fechas Disponibles ' . $texto . '</h4>
                    <div class="text-15 text-light-1 ls-2 lh-16">
                        <input type="text" name="fecha_reserva" id="fecha_dispon" value="' . $fecha_reserva . '" required>
                    </div>
                </div>
            </div>
        </div>';

        $output .= '
        <div class="col-12">
            <div class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">
                <div data-x-dd-click="searchMenu-guests">
                    <h4 class="text-15 fw-500 ls-2 lh-16">Número de viajeros</h4>
                    <div class="d-flex text-15 text-light-1 ls-2 lh-16">
                        <span class="d-flex">
                            <input class="js-count-adulto" id="num_adultos" name="num_adultos" style="text-align: right;width: 15px;" value="' . $item_cart["adultos"] . '" readonly required>
                            Adultos
                        </span>';
        if ($ninos_menores == 1) {
            $output .= '-
                            <span class="d-flex">
                                <input class="js-count-infantes" id="num_ninos_menores" name="num_ninos_menores" style="text-align: right;width: 15px;" value="' . $item_cart["ninos_menores"] . '" readonly>
                                Infantes
                            </span>';
        }
        if ($ninos_mayores == 1) {
            $output .= '-
                            <span class="d-flex">
                                <input class="js-count-ninos" id="nun_ninos_mayores" name="nun_ninos_mayores" style="text-align: right;width: 15px;" value="' . $item_cart["ninos_mayores"] . '" readonly>
                                Niños
                            </span>';
        }
        if ($adultos_mayores == 1) {
            $output .= '-
                            <span class="d-flex">
                                <input class="js-count-mayor" id="num_adultos_mayores" name="num_adultos_mayores" style="text-align: right;width: 15px;" value="' . $item_cart["adultos_mayores"] . '" readonly>
                                Adu.Mayor
                            </span>';
        }
        $output .= '</div>
                </div>
                <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                    <div class="bg-white px-30 py-30 rounded-4">
                        <div class="row y-gap-10 justify-between items-center">
                            <div class="col-auto">
                                <div class="text-15 fw-500">Adultos</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">Edad ' . $edad_min_adultos . " - " . $edad_max_adultos . '</div>
                            </div>
                            <div class="col-auto">
                                <div class="d-flex items-center js-counter" data-value-change=".js-count-adulto">
                                    <a href="javascript:void(0);" class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                        <i class="icon-minus text-12"></i>
                                    </a>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                        <div class="text-15 js-count">1</div>
                                    </div>

                                    <a class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                        <i class="icon-plus text-12"></i>
                                    </a>
                                </div>
                            </div>
                        </div>';

        if ($ninos_menores == 1) {

            $output .= '<div class="border-top-light mt-24 mb-24"></div>

                            <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                    <div class="text-15 lh-12 fw-500">Infantes</div>
                                    <div class="text-14 lh-12 text-light-1 mt-5">Edad ' . $edad_min_ninmen . " - " . $edad_max_ninmen . '</div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-infantes">
                                        <a href="javascript:void(0);" class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                            <i class="icon-minus text-12"></i>
                                        </a>

                                        <div class="flex-center size-20 ml-15 mr-15">
                                            <div class="text-15 js-count">0</div>
                                        </div>

                                        <a href="javascript:void(0);" class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                            <i class="icon-plus text-12"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>';
        }

        if ($ninos_mayores == 1) {
            $output .= '<div class="border-top-light mt-24 mb-24"></div>

                            <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                    <div class="text-15 fw-500">Niños</div>
                                    <div class="text-14 lh-12 text-light-1 mt-5">Edad ' . $edad_min_ninmay . " - " . $edad_max_ninmay . '</div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-ninos">
                                        <a href="javascript:void(0);" class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                            <i class="icon-minus text-12"></i>
                                        </a>

                                        <div class="flex-center size-20 ml-15 mr-15">
                                            <div class="text-15 js-count">0</div>
                                        </div>

                                        <a href="javascript:void(0);" class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                            <i class="icon-plus text-12"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>';
        }
        if ($adultos_mayores == 1) {
            $output .= '<div class="border-top-light mt-24 mb-24"></div>

                            <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                    <div class="text-15 fw-500">Adul.Mayor</div>
                                    <div class="text-14 lh-12 text-light-1 mt-5">Edad <?= $edad_min_admay . " - " . $edad_max_admay; ?></div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-mayor">
                                        <a href="javascript:void(0);" class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                            <i class="icon-minus text-12"></i>
                                        </a>

                                        <div class="flex-center size-20 ml-15 mr-15">
                                            <div class="text-15 js-count">0</div>
                                        </div>

                                        <a href="javascript:void(0);" class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                            <i class="icon-plus text-12"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>';
        }
        $output .= '
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <button class=" -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white">
                Actualizar
            </button>
        </div>
    </div>
    </form>';

        echo json_encode(array(
            "status" => true,
            "html" => $output,
        ));
    }
    public function disponibilidad()
    {
        $cod_servicio = $_POST["cod_servicio"];
        $restriccion = $this->servicio_model->getDetalleRestriccion($cod_servicio);
        if (!isset($restriccion)) {
            echo json_encode(array(
                "status" => false,
                "message" => "No podemos registrar su reservación."
            ));
        } else {

            $ninos_menores = $restriccion->ninos_menores;
            $ninos_mayores = $restriccion->ninos_mayores;
            $adultos_mayores = $restriccion->adultos_mayores;
            $personas_minimas = $restriccion->personas_minima;
            $cod_disponibilidad = $restriccion->disponibilidad;
            $estado_ninos_menores = 1;
            $estado_ninos_mayores = 1;
            $estado_adultos_mayores = 1;
            $num_adultos = $_POST['num_adultos'];
            $num_ninos_menores = 0;
            $num_ninos_mayores = 0;
            $num_adultos_mayores = 0;


            $numero_personas = 0;
            // evaluamos ninos mayores 
            if ($ninos_mayores !== "0") {
                if (isset($_POST['nun_ninos_mayores']) && $_POST['nun_ninos_mayores'] >= 0 && $_POST['nun_ninos_mayores'] !== "") {
                    $estado_ninos_mayores = 1;
                    $num_ninos_mayores = $_POST['nun_ninos_mayores'];
                } else {
                    $estado_ninos_mayores = 0;
                }
            }
            if ($ninos_menores !== "0") {
                if (isset($_POST['num_ninos_menores']) && $_POST['num_ninos_menores'] >= 0 && $_POST['num_ninos_menores'] !== "") {
                    $estado_ninos_menores = 1;
                    $num_ninos_menores = $_POST['num_ninos_menores'];
                } else {
                    $estado_ninos_menores = 0;
                }
            }
            if ($adultos_mayores !== "0") {
                if (isset($_POST['num_adultos_mayores']) && $_POST['num_adultos_mayores'] >= 0 && $_POST['num_adultos_mayores'] !== "") {
                    $estado_adultos_mayores = 1;
                    $num_adultos_mayores = $_POST['num_adultos_mayores'];
                } else {
                    $estado_adultos_mayores = 0;
                }
            }
            $numero_personas = $num_ninos_menores + $num_ninos_mayores + $num_adultos + $num_adultos_mayores;
            if ($numero_personas < $personas_minimas) {
                echo json_encode(array(
                    "status" => false,
                    "message" => "Para reservar este Tour, es necesario contar con mínimo $personas_minimas personas."
                ));
            } else {
                $ser = $this->servicio_model->get($cod_servicio);
                $titulo = mb_strtoupper($ser->titulo);
                $id_costo = $ser->id_tipo_costo;
                $costo = $ser->costo;
                $total = 0;
                if ($id_costo == 1) {
                    # por persona
                    $detalle_costo = $this->servicio_model->getDetalleCosto($id_serv);
                    $costo_ninos_menores = $detalle_costo->costo_ninos_menores * $num_ninos_menores;
                    $costo_ninos_mayores = $detalle_costo->costo_ninos_mayores * $num_ninos_mayores;
                    $costo_adultos = $detalle_costo->costo_adultos * $num_adultos;
                    $costo_adultos_mayores = $detalle_costo->costo_adultos_mayores * $num_adultos_mayores;
                    $total = $costo_ninos_menores + $costo_ninos_mayores + $costo_adultos + $costo_adultos_mayores;
                } else {
                    # por paquete
                    $total = $costo;
                }


                $disponibilidad = $this->servicio_model->getDisponibilidad($cod_servicio);
                $hora_inicio = "";
                $hora_fin = "";
                $fecha_inicio = "";
                $fecha_fin = "";
                $fecha_disponible = "";
                $valor_dia = 0;
                $ray_disponible = array();
                if (isset($disponibilidad)) {
                    $fecha_inicio = $disponibilidad->fecha_inicio;
                    $fecha_fin = date("Y-m-d", strtotime($fecha_inicio . "+ 1 year"));
                }
                switch ($cod_disponibilidad) {
                    case '1':
                        #todo los dias
                        $texto = "Todo los dias.";
                        $fechaInicio = strtotime(date("Y-m-d"));
                        $fechaFin = strtotime($fecha_fin);
                        for ($i = $fechaInicio; $i <= $fechaFin; $i += 86400) {
                            $fecha_disponible = date("Y-m-d", $i);
                            array_push($ray_disponible, $fecha_disponible);
                        }
                        break;
                    case '2':
                        # solo dias de semana
                        $texto = "Solo dias de semana.";
                        $fechaInicio = strtotime(date("Y-m-d"));
                        $fechaFin = strtotime($fecha_fin);
                        for ($i = $fechaInicio; $i <= $fechaFin; $i += 86400) {
                            $fecha_disponible = date("Y-m-d", $i);
                            $valor_dia = date('w', strtotime($fecha_disponible));
                            if ($valor_dia !== "0" && $valor_dia !== "1") {
                                array_push($ray_disponible, $fecha_disponible);
                            }
                        }
                        break;
                    case '3':
                        # solo fines de semana
                        $texto = "Solo fines de semana.";
                        $fechaInicio = strtotime(date("Y-m-d"));
                        $fechaFin = strtotime($fecha_fin);
                        for ($i = $fechaInicio; $i <= $fechaFin; $i += 86400) {
                            $fecha_disponible = date("Y-m-d", $i);
                            $valor_dia = date('w', strtotime($fecha_disponible));
                            if ($valor_dia == 0 || $valor_dia == 1) {
                                array_push($ray_disponible, $fecha_disponible);
                            }
                        }
                        break;
                    case '4':
                        # solo feriados
                        break;
                    case '5':
                        // personalizado
                        break;
                    default:
                        # code...
                        break;
                }
                $fecha_reserva = $this->util->obtener_fecha_format(ltrim($_POST['fecha_reserva']));
                if (!in_array($fecha_reserva, $ray_disponible)) {
                    echo json_encode(array(
                        "status" => false,
                        "message" => "Fecha no disponible"
                    ));
                } else {
                    $cartitem_updated = false;
                    if (isset($_POST["rowid"])) {
                        $rowid = $_POST["rowid"];
                        $item_cart = $this->cart->get_item($rowid);
                        $item_cart["item"]["fecha_reserva"] = $fecha_reserva;
                        $cartitem_updated = $this->cart->update($item_cart);
                    }
                    echo json_encode(array(
                        "status" => true,
                        "cartitem_updated" => $cartitem_updated,
                        "message" => "",
                        "data" => array(
                            "num_adultos" => $num_adultos,
                            "num_ninos_menores" => $num_ninos_menores,
                            "num_ninos_mayores" => $num_ninos_mayores,
                            "num_adultos_mayores" => $num_adultos_mayores,
                            "fecha_reserva" => $fecha_reserva,
                            "id_costo" => $id_costo,
                            "total" => $total,
                            "numero_personas" => $numero_personas,
                        )
                    ));
                }
            }
        }
    }
    function getItems()
    {
        $cod_categoria = $_POST["cod_categoria"];
        $cod_sub_categoria = isset($_POST["cod_sub_categoria"]) ? implode("','", $_POST["cod_sub_categoria"]) : "";
        $destinos = isset($_POST["destinos"]) ? implode("','", $_POST["destinos"]) : "";
        $duraciones = isset($_POST["duraciones"]) ? $_POST["duraciones"] : [];
        $precio_minimo = $_POST["precio_minimo"];
        $precio_maximo = $_POST["precio_maximo"];
        $texto = $_POST["texto"];
        $start = 0;
        $resultado = $this->servicio_model->getAll($cod_categoria, $cod_sub_categoria, $precio_minimo, $precio_maximo, $duraciones, $start, $texto, $destinos);
        $servicios = $resultado["data"];
        $total = $this->servicio_model->getAllTotal($cod_categoria, $cod_sub_categoria, $precio_minimo, $precio_maximo, $duraciones, $start, $texto, $destinos);

        // $data["total"] = $this->servicio_model->getAllTotal($cod_categoria, $cod_sub_categoria, $start);
        $output = "";
        if ($total > 0) {
            foreach ($servicios as $key => $row) {
                $geo = $this->servicio_model->getGeo_x_Servicio($row->cod_servicio);
                $row->geo = isset($geo) ? $geo->region . ", " . $geo->provincia : "No definido.";


                $output .= "<div class='col-lg-4 col-sm-6'>
                <a href='" . base_url() . "detalleTour/" . $row->cod_servicio . "' class='tourCard -type-1 rounded-4'>
                    <div class='tourCard__image'>
                        <div class='cardImage ratio ratio-1:1'>
                            <div class='cardImage__content'>
                                <img class='rounded-4 col-12 js-lazy loaded' src='" . SERVER_IMG . "portada/" . $row->img_portada . "' alt='image' data-ll-status='loaded'>
                            </div>
                            <div class='cardImage__wishlist'>
                                <button class='button -blue-1 bg-white size-30 rounded-full shadow-2'>
                                    <i class='icon-heart text-12'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class='tourCard__content mt-10'>
                        <div class='d-flex items-center lh-14 mb-5'>
                            <div class='text-14 text-light-1'>
                                $row->duracion $row->medida_cuando
                            </div>
                            <div class='size-3 bg-light-1 rounded-full ml-10 mr-10'></div>
                            <div class='text-14 text-light-1'>
                                $row->cod_categoria
                            </div>
                        </div>
                        <h4 class='tourCard__title text-dark-1 text-18 lh-16 fw-500'>
                            <span>$row->titulo</span>
                        </h4>
                        <p class='text-light-1 lh-14 text-14 mt-5'>
                            $row->geo
                        </p>
                        <div class='row justify-between items-center pt-15'>
                            <div class='col-auto'>
                                <div class='d-flex items-center'>
                                    <div class='d-flex items-center x-gap-5'>
                                        <div class='icon-star text-yellow-1 text-10'></div>
                                        <div class='icon-star text-yellow-1 text-10'></div>
                                        <div class='icon-star text-yellow-1 text-10'></div>
                                        <div class='icon-star text-yellow-1 text-10'></div>
                                        <div class='icon-star text-yellow-1 text-10'></div>
                                    </div>
                                    <div class='text-14 text-light-1 ml-10'>
                                        3,014 reviews
                                    </div>
                                </div>
                            </div>
                            <div class='col-auto'>
                                <div class='text-14 text-light-1'>
                                    From
                                    <span class='text-16 fw-500 text-dark-1'>$
                                        $row->costo
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>";
            }
        } else {
            $output .= "No hay resultados con estos filtros";
        }

        $json = array(
            "query" => $resultado["query"],
            "total" => $total,
            "html" => $output,
        );
        echo json_encode($json);
    }
}
