<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Destino_model extends CI_Model
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
    function get($id)
    {
        $query = "SELECT
                *
                FROM
                destinos
                WHERE cod_destino = $id";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function get_nombre($nombre)
    {
        $query = "SELECT
                *
                FROM
                destinos
                WHERE LOWER(nombre) = '$nombre'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
}
