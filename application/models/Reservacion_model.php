<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reservacion_model extends CI_Model
{

    function getRecuento()
    {
        $query = "SELECT
                COUNT(*) as recuento
                FROM
                reservaciones";
        return (int) $this->db->query($query)->row()->recuento;
    }

    function insert($info)
    {
        return $this->db->insert('reservaciones', $info);
    }

    function insertDetalle($info)
    {
        return $this->db->insert('detalle_reservacion', $info);
    }
    function getInsert_id()
    {
        return $this->db->insert_id();
    }

    function update($id, $info)
    {
        $this->db->where(array("cod_usuario" => $id));
        return $this->db->update('reservaciones', $info);
    }

    function delete($id)
    {
        $this->db->where(array("cod_usuario" => $id));
        return $this->db->update('reservaciones', array("estado" => 0));
        //return $this->db->delete('usuario', array("cod_usuario" => $id));
    }

    function activacion($id, $estado)
    {
        $this->db->where(array("cod_usuario" => $id));
        return $this->db->update('usuario', array("estado" => $estado == 0 ? 1 : 0));
    }
}
