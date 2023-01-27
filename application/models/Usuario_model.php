<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Usuario_model extends CI_Model
{
    function getAll($query, $offset, $limit)
    {
        $query = "SELECT
                usuario.idusuario,
                usuario.usuario,
                TRIM(CONCAT( IFNULL(usuario.apellidos,''),' ', IFNULL(usuario.nombres,''))) AS nombrecompleto,
                usuario.apellidos, 
                usuario.nombres,
                usuario.nrodocumento,
                usuario.direccion,
                usuario.telefono,
                usuario.foto,
                usuario.estado as idestado,
                case when usuario.estado=1 then 'Activo' else 'Inactivo' end as estado,
                rol.idrol,
                rol.nombre as rol
                FROM
                usuario
                INNER JOIN rol ON rol.idrol = usuario.idrol
                WHERE usuario.estado = 1 
                AND (usuario.usuario LIKE '%$query%'
                OR usuario.nombres LIKE '%$query%'
                OR usuario.apellidos LIKE '%$query%'
                OR usuario.nrodocumento LIKE '%$query%'
                OR rol.nombre LIKE '%$query%')
                order by nombrecompleto
                LIMIT $limit OFFSET $offset";
        return $this->db->query($query)->result();
    }
    function getRecuento()
    {
        $query = "SELECT
                COUNT(*) as recuento
                FROM
                usuarios";
        return (int) $this->db->query($query)->row()->recuento;
    }
    function getAllTotal($query)
    {
        $query = "SELECT
                COUNT(*) as total
                FROM
                usuario
                INNER JOIN rol ON rol.idrol = usuario.idrol
                WHERE usuario.estado = 1 
                AND (usuario.usuario LIKE '%$query%'
                OR usuario.nombres LIKE '%$query%'
                OR usuario.apellidos LIKE '%$query%'
                OR usuario.nrodocumento LIKE '%$query%'
                OR rol.nombre LIKE '%$query%')
                ";
        return (int) $this->db->query($query)->row()->total;
    }
    function getCombo()
    {
        $query = "SELECT
                usuario.idusuario,
                usuario.usuario,
                TRIM(CONCAT( IFNULL(usuario.apellidos,''),' ', IFNULL(usuario.nombres,''))) AS nombrecompleto,
                usuario.apellidos, 
                usuario.nombres,
                usuario.nrodocumento,
                usuario.direccion,
                usuario.telefono,
                usuario.foto,
                usuario.estado as idestado,
                case when usuario.estado=1 then 'Activo' else 'Inactivo' end as estado,
                rol.idrol,
                rol.nombre as rol
                FROM
                usuario
                INNER JOIN rol ON rol.idrol = usuario.idrol
                WHERE usuario.estado = 1  ";
        return $this->db->query($query)->result();
    }
    function checkTotalDocumento($doc, $id_exception = 0)
    {
        $query = "select count(usuario) as total from usuario where usuario = '$doc' AND idusuario != $id_exception";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row()->total;
        }
    }
    function getUsuarioInvitado($run)
    {
        $query = "SELECT
                *
                from usuarios
                where run='$run' and tipo_usurio=2";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    function insert($info)
    {
        return $this->db->insert('usuarios', $info);
    }

    function getInsert_id()
    {
        return $this->db->insert_id();
    }

    function update($id, $info)
    {
        $this->db->where(array("cod_usuario" => $id));
        return $this->db->update('usuarios', $info);
    }

    function delete($id)
    {
        $this->db->where(array("cod_usuario" => $id));
        return $this->db->update('usuarios', array("estado" => 0));
        //return $this->db->delete('usuario', array("cod_usuario" => $id));
    }

    function activacion($id, $estado)
    {
        $this->db->where(array("cod_usuario" => $id));
        return $this->db->update('usuario', array("estado" => $estado == 0 ? 1 : 0));
    }
}
