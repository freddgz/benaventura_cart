<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Servicio_model extends CI_Model
{


    function getAllClean($cod_categoria, $start)
    {
        $query = "SELECT 
                * 
                FROM servicios AS s
                , detalles_servicio AS d 
                WHERE s.cod_servicio=d.cod_servicio ";
        $query .= "AND s.cod_categoria='$cod_categoria'
                ORDER BY s.fecha_reg ASC 
                LIMIT " . $start . "," . NUM_ITEMS_BY_PAGE;
        return $this->db->query($query)->result();
    }
    function getAll($cod_categoria, $cod_sub_categoria, $precio_minimo, $precio_maximo, $duraciones, $start)
    {
        $array_duracion = [];
        foreach ($duraciones as $nro)
            array_push($array_duracion, "d.duracion between " . ARRAY_DURACION[$nro]["desde"] . " and " . ARRAY_DURACION[$nro]["hasta"]);
        $query_duracion = implode(" OR ", $array_duracion);
        $query = "SELECT 
                * 
                FROM servicios AS s
                , detalles_servicio AS d 
                WHERE s.cod_servicio=d.cod_servicio ";
        if ($cod_sub_categoria !== "")
            $query .= " AND s.cod_subcategori in ('$cod_sub_categoria') ";
        if (sizeof($duraciones) > 0)
            $query .= " AND ($query_duracion)";
        $query .= " AND s.cod_categoria='$cod_categoria'
                AND s.costo between $precio_minimo and $precio_maximo
                ORDER BY s.fecha_reg ASC 
                LIMIT " . $start . "," . NUM_ITEMS_BY_PAGE;
        // echo $query;
        $result = $this->db->query($query)->result();
        return array("data" => $result, "query" => $query);
    }
    function getAllTotal($cod_categoria, $cod_sub_categoria, $precio_minimo, $precio_maximo, $duraciones, $start)
    {
        $array_duracion = [];
        foreach ($duraciones as $nro)
            array_push($array_duracion, "d.duracion between " . ARRAY_DURACION[$nro]["desde"] . " and " . ARRAY_DURACION[$nro]["hasta"]);
        $query_duracion = implode(" OR ", $array_duracion);
        $query = "SELECT
                COUNT(*) as total
                FROM servicios AS s
                , detalles_servicio AS d 
                WHERE s.cod_servicio=d.cod_servicio ";
        if ($cod_sub_categoria !== "")
            $query .= " AND s.cod_subcategori in ('$cod_sub_categoria') ";
        if (sizeof($duraciones) > 0)
            $query .= " AND ($query_duracion)";
        $query .= " AND s.cod_categoria='$cod_categoria'
        AND s.costo between $precio_minimo and $precio_maximo
         ";
        return (int) $this->db->query($query)->row()->total;
    }
    function getTop()
    {
        $query = "SELECT * FROM destinos LIMIT 6";
        return $this->db->query($query)->result();
    }
    function getAll_x_categoria($cod_categoria)
    {
        $query = "SELECT * FROM servicios AS s
                , detalles_servicio AS d 
                WHERE s.cod_servicio=d.cod_servicio 
                AND s.cod_categoria='$cod_categoria' LIMIT 8";
        return $this->db->query($query)->result();
    }
    function getItinerarios($cod_servicio)
    {
        $query = "SELECT * FROM itinerario_servicio 
                WHERE cod_servicio='$cod_servicio'";
        return $this->db->query($query)->result();
    }
    function getGaleria($cod_servicio)
    {
        $query = "SELECT * FROM galeria_servicios 
                WHERE cod_servicio='$cod_servicio'";
        return $this->db->query($query)->result();
    }

    function getIncluidos($cod_servicio)
    {
        $query = "SELECT * FROM incluye_serv WHERE cod_servicio='$cod_servicio'";
        return $this->db->query($query)->result();
    }
    function getNoIncluidos($cod_servicio)
    {
        $query = "SELECT * FROM excluye_serv WHERE cod_servicio='$cod_servicio'";
        return $this->db->query($query)->result();
    }
    function getGeo_x_Servicio($cod_servicio)
    {
        $query = "SELECT 
                g.cod_geo,
                r.region,
                p.provincia,
                c.comuna 
                FROM geo_servicios AS g
                , regiones AS r
                , provincias AS p
                , comunas AS c 
                WHERE g.id_region=r.id 
                AND g.id_provincia=p.id 
                AND g.id_comuna=c.id 
                AND g.cod_servicio='$cod_servicio'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function get($cod_servicio)
    {
        $query = "SELECT 
                * 
                FROM servicios AS s
                , detalles_servicio AS d 
                WHERE s.cod_servicio=d.cod_servicio 
                AND s.cod_servicio='$cod_servicio'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function getRestriccion($cod_servicio)
    {
        $query = "SELECT 
                * 
                FROM restricciones_servicios 
                WHERE cod_servicio='$cod_servicio'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function getDetalleRestriccion($cod_servicio)
    {
        $query = "SELECT 
                * 
                FROM restricciones_servicios AS r
                , detalles_servicio AS d 
                WHERE r.cod_servicio=d.cod_servicio 
                AND r.cod_servicio='$cod_servicio'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function getDetalleCosto($cod_servicio)
    {
        $query = "SELECT 
                * 
                FROM detalle_costo 
                WHERE cod_servicio='$cod_servicio'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function getDisponibilidad($cod_servicio)
    {
        $query = "SELECT * FROM disponibilidad_servicio 
                WHERE cod_servicio='$cod_servicio'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function insert($info)
    {
        return $this->db->insert('agenda', $info);
    }

    function getInsert_id()
    {
        return $this->db->insert_id();
    }

    function update($id, $info)
    {
        $this->db->where(array("idagenda" => $id));
        return $this->db->update('agenda', $info);
    }

    function delete($id)
    {
        $this->db->where(array("idagenda" => $id));
        return $this->db->update('agenda', array("estado" => 0));
    }
}
