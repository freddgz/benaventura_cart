<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Empleado_model extends CI_Model
{
    function getAll($idusuario, $query, $offset, $limit)
    {
        $query = "SELECT
                emp.idempleado,
                cli.idusuariocreacion,
                us.usuario,
                cli.idcliente,
                cli.razonsocial as cliente,
                emp.iddocumentoidentidad,
                tm.valor as documentoidentidad,
                emp.nrodocumento,
                emp.nombres,
                emp.apellidos,
                emp.telefono,
                emp.whatsapp,
                emp.correo,
                emp.nota,
                emp.estado
                FROM empleado emp
                inner join tablamaestra tm on tm.idtabla=2 and tm.idcolumna=emp.iddocumentoidentidad
                inner join cliente cli on cli.idcliente=emp.idcliente
                inner join usuario us on us.idusuario=cli.idusuariocreacion
                where emp.estado=1
                AND (cli.idusuariocreacion=$idusuario OR $idusuario=0)
                AND (
                    emp.nrodocumento LIKE '%$query%'
                    OR cli.razonsocial LIKE '%$query%'
                    OR emp.nombres LIKE '%$query%'
                    OR emp.apellidos LIKE '%$query%'
                    OR emp.telefono LIKE '$query%'
                    OR emp.whatsapp LIKE '$query%'
                    OR emp.correo LIKE '%$query%'
                    )
                ORDER BY idempleado desc
                LIMIT $limit OFFSET $offset";
        return $this->db->query($query)->result();
    }
    function getAllTotal($idusuario, $query)
    {
        $query = "SELECT
                COUNT(*) as total
                FROM empleado emp
                inner join tablamaestra tm on tm.idtabla=2 and tm.idcolumna=emp.iddocumentoidentidad
                inner join cliente cli on cli.idcliente=emp.idcliente
                inner join usuario us on us.idusuario=cli.idusuariocreacion
                where emp.estado=1
                AND (cli.idusuariocreacion=$idusuario OR $idusuario=0)
                AND (
                    emp.nrodocumento LIKE '%$query%'
                    OR cli.razonsocial LIKE '%$query%'
                    OR emp.nombres LIKE '%$query%'
                    OR emp.apellidos LIKE '%$query%'
                    OR emp.telefono LIKE '$query%'
                    OR emp.whatsapp LIKE '$query%'
                    OR emp.correo LIKE '%$query%'
                    )";
        return (int) $this->db->query($query)->row()->total;
    }
    function get($id)
    {
        $query = "SELECT
                emp.idempleado,
                cli.idusuariocreacion,
                us.usuario,
                cli.idcliente,
                cli.razonsocial as cliente,
                emp.iddocumentoidentidad,
                tm.valor as documentoidentidad,
                emp.nrodocumento,
                emp.nombres,
                emp.apellidos,
                emp.telefono,
                emp.whatsapp,
                emp.correo,
                emp.nota,
                emp.estado
                FROM empleado emp
                inner join tablamaestra tm on tm.idtabla=2 and tm.idcolumna=emp.iddocumentoidentidad
                inner join cliente cli on cli.idcliente=emp.idcliente
                inner join usuario us on us.idusuario=cli.idusuariocreacion
                where emp.idempleado = $id";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function getCombo($idcliente)
    {
        $query = "SELECT
                emp.idempleado,
                cli.idusuariocreacion,
                us.usuario,
                cli.idcliente,
                cli.razonsocial as cliente,
                emp.iddocumentoidentidad,
                tm.valor as documentoidentidad,
                emp.nrodocumento,
                emp.nombres,
                emp.apellidos,
                emp.telefono,
                emp.whatsapp,
                emp.correo,
                emp.nota,
                emp.estado
                FROM empleado emp
                inner join tablamaestra tm on tm.idtabla=2 and tm.idcolumna=emp.iddocumentoidentidad
                inner join cliente cli on cli.idcliente=emp.idcliente
                inner join usuario us on us.idusuario=cli.idusuariocreacion
                AND cli.idcliente=$idcliente";
        return $this->db->query($query)->result();
    }
    function checkTotalDocumento($doc, $id_exception = 0)
    {
        $query = "select count(nrodocumento) as total from empleado where nrodocumento = '$doc' AND idempleado != $id_exception AND estado=1";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row()->total;
        }
    }

    function insert($info)
    {
        return $this->db->insert('empleado', $info);
    }

    function getInsert_id()
    {
        return $this->db->insert_id();
    }

    function update($id, $info)
    {
        $this->db->where(array("idempleado" => $id));
        return $this->db->update('empleado', $info);
    }

    function delete($id)
    {
        $this->db->where(array("idempleado" => $id));
        return $this->db->update('empleado', array("estado" => 0));
    }
}
