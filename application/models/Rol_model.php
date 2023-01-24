<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Rol_model extends CI_Model
{
    function getAll()
    {
        $query = "SELECT idrol,nombre 
        from rol 
        where estado=1
        ORDER BY nombre";
        return $this->db->query($query)->result();
    }

    function get($id)
    {
        $query = "select
                idrol,nombre
                from rol
                where idrol=$id";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    function insert($info)
    {
        return $this->db->insert('rol', $info);
    }

    function getInsert_id()
    {
        return $this->db->insert_id();
    }

    function update($id, $info)
    {
        $this->db->where(array("idrol" => $id));
        return $this->db->update('rol', $info);
    }

    function checkTotalUsuarios($prfcod)
    {
        $query = "SELECT COUNT(*) AS total 
                FROM usuario
                WHERE idrol=$prfcod";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row()->total;
        }
    }
    function delete($id)
    {
        $this->db->where(array("idrol" => $id));
        return $this->db->update('rol', array("estado" => 0));
        //return $this->db->delete("rol", array("idrol" => $id));
    }
}
