<?php

/**
 * Created by PhpStorm.
 * User: fredd
 * Date: 13/08/2019
 * Time: 20:00
 */

class Util
{
    function code_OT($idot)
    {
        return "OT" . sprintf('%05d', $idot);
    }
    function dformat($date)
    {
        if (empty($date)) return "";
        return date('d/m/Y', strtotime($date));
    }

    /* $var: dd/mm/yyyy */
    function dformat_ymd($var)
    {
        $date = str_replace('/', '-', $var);
        return date('Y-m-d', strtotime($date));
    }

    function dformat_hora($date)
    {
        if (empty($date)) return "";
        return date('d/m/Y g:i a', strtotime($date));
    }
    function getNameMonth($month)
    {
        $meses = array(
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Setiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        );
        $month = (int) $month;
        return $meses[$month - 1];
    }
    function month_ES($fecha)
    {
        $arr = array(
            'January' => 'Enero',
            'February' => 'Febrero',
            'March' => 'Marzo',
            'April' => 'Abril',
            'May' => 'Mayo',
            'June' => 'Junio',
            'July' => 'Julio',
            'August' => 'Agosto',
            'September' => 'Septiembre',
            'October' => 'Octubre',
            'November' => 'Noviembre',
            'December' => 'Diciembre'
        );
        return strtr($fecha, $arr);
    }
    function day_ES($fecha)
    {
        $arr = array(
            'Monday' => 'Lunes',
            'Tuesday' => 'Martes',
            'Wednesday' => 'Miercoles',
            'Thursday' => 'Jueves',
            'Friday' => 'Viernes',
            'Saturday' => 'Sabado',
            'Sunday' => 'Domingo'
        );
        // return $fecha;
        return strtr($fecha, $arr);
    }
    function buildHeaderContent($menu)
    {
        if (isset($menu)) {
            $header_content = "<section class='content-header'>
                                <h1>
                                    <i class='fa $menu->icon'></i> $menu->nombre
                                </h1>
                                <ol class='breadcrumb'>
                                    <li><i class='fa fa-home'></i> Home</li>";
            $header_content .= isset($menu->p_idmenu) ? "<li>$menu->p_nombre</li>" : "";
            $header_content .= "<li class='active'>$menu->nombre</li>
                                </ol>
                            </section>";

            return $header_content;
        }
    }
    function isValidDate($date,  $format = 'Y-m-d')
    {
        $dateObj = DateTime::createFromFormat($format, $date);
        return $dateObj && $dateObj->format($format) == $date;
    }

    function if_obj_empty_blank($obj, $prop)
    {
        if (isset($obj->$prop))
            return $obj->$prop;
        else return "";
    }
    function if_obj_empty_blank_else($obj, $prop, $ifnot)
    {

        if (isset($obj->$prop))
            return $obj->$prop;
        else return $ifnot;
    }
    function if_empty_blank($var)
    {
        $result = "";
        if (isset($var)) $result = $var;
        //else if (!empty($var)) $result = $var;
        return $result;
    }

    public static function encryption($string)
    {
        $output = FALSE;
        $key = hash('sha256', SECRET_KEY);
        $iv = substr(hash('sha256', SECRET_IV), 0, 16);
        $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }
    public static  function decryption($string)
    {
        $key = hash('sha256', SECRET_KEY);
        $iv = substr(hash('sha256', SECRET_IV), 0, 16);
        $output = openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }

    public function generar_codigo_aleatorio($letra, $longitud, $numero)
    {
        for ($i = 1; $i <= $longitud; $i++) {
            $numero = rand(0, 9);
            $letra .= $numero;
        }
        return $letra . $numero; // te dejo, ve ok dibugueando cada controlador que sea la primer linea, despues se la borras, bye ok bro gracias
    }

    protected function limpiar_cadena($cadena)
    {
        $cadena = trim($cadena);
        $cadena = stripcslashes($cadena);
        $cadena = str_ireplace("<script>", "", $cadena);
        $cadena = str_ireplace("</script>", "", $cadena);
        $cadena = str_ireplace("</script type=", "", $cadena);
        $cadena = str_ireplace("</script src=", "", $cadena);
        $cadena = str_ireplace("SELECT * FROM", "", $cadena);
        $cadena = str_ireplace("DELETE  FROM", "", $cadena);
        $cadena = str_ireplace("INSERT  INTO", "", $cadena);
        $cadena = str_ireplace("INSERT  INTO", "", $cadena);
        $cadena = str_ireplace("--", "", $cadena);
        $cadena = str_ireplace("^", "", $cadena);
        $cadena = str_ireplace("[", "", $cadena);
        $cadena = str_ireplace("]", "", $cadena);
        $cadena = str_ireplace("==", "", $cadena);
        $cadena = str_ireplace("'", "", $cadena);
        return $cadena;
    }
    public static function obtener_fecha_format($fecha)
    {
        $fecha_inicio = explode(",", $fecha);

        $descom = explode(" ", $fecha_inicio[0]);
        $meses  = ltrim($descom[0]);
        switch ($meses) {
            case 'Enero':
                $monthNameSpanish = 01;
                break;

            case 'Febrero':
                $monthNameSpanish = 02;
                break;

            case 'Marzo':
                $monthNameSpanish = 03;
                break;

            case 'Abril':
                $monthNameSpanish = 04;
                break;

            case 'Mayo':
                $monthNameSpanish = 05;
                break;

            case 'Junio':
                $monthNameSpanish = 06;
                break;

            case 'Julio':

                $monthNameSpanish = 07;
                break;

            case 'Agosto':

                $monthNameSpanish = 8;
                break;

            case 'Septiembre':
                $monthNameSpanish = 9;
                break;


            case 'Octubre':
                $monthNameSpanish = 10;
                break;

            case 'Noviembre':
                $monthNameSpanish = 11;
                break;

            case 'Diciembre':
                $monthNameSpanish = 12;
                break;
                //...
        }
        if (ltrim($descom[1]) < 10) {
            $dia = "0" . ltrim($descom[1]);
        } else {
            $dia = ltrim($descom[1]);
        }
        date('Y');
        $cadena_fecha = date('Y') . "-" . $monthNameSpanish . "-" . $dia;
        $oldDate = strtotime($cadena_fecha);
        $newDate = date('Y-m-d', $oldDate);
        return $newDate;
    }
    public static function obtener_fecha_format_text($fecha)
    {
        $fecha_inicio = explode("-", $fecha);

        $meses  = ltrim($fecha_inicio[1]);
        switch ($meses) {
            case 01:
                $monthNameSpanish = 'Enero';
                break;

            case 02:
                $monthNameSpanish = 'Febrero';
                break;

            case 03:
                $monthNameSpanish = 'Marzo';
                break;

            case 04:
                $monthNameSpanish = 'Abril';
                break;

            case 05:
                $monthNameSpanish = 'Mayo';
                break;

            case 06:
                $monthNameSpanish = 'Junio';
                break;

            case 07:

                $monthNameSpanish = 'Julio';
                break;

            case 8:

                $monthNameSpanish = 'Agosto';
                break;

            case 9:
                $monthNameSpanish = 'Septiembre';
                break;


            case 10:
                $monthNameSpanish = 'Octubre';
                break;

            case 11:
                $monthNameSpanish = 'Noviembre';
                break;

            case 12:
                $monthNameSpanish = 'Diciembre';
                break;
                //...
        }
        $cadena_fecha = $monthNameSpanish . " " . $fecha_inicio[2] . ", " . $fecha_inicio[0];
        return $cadena_fecha;
    }
    public static function limitar_cadena($cadena, $limite, $sufijo)
    {
        // Si la longitud es mayor que el límite...
        if (strlen($cadena) > $limite) {
            // Entonces corta la cadena y ponle el sufijo
            return substr($cadena, 0, $limite) . $sufijo;
        }

        // Si no, entonces devuelve la cadena normal
        return $cadena;
    }
}
