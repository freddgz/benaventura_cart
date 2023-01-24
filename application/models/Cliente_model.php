<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Cliente_model extends CI_Model
{
    function getAll($idusuario, $query, $offset, $limit)
    {
        $query = "SELECT
                cli.idcliente,
                cli.idusuariocreacion,
                us.usuario,
                cli.iddocumentoidentidad,
                tm.valor as documentoidentidad,
                cli.nrodocumento,
                cli.razonsocial,
                cli.nombrecomercial,
                cli.idcategoria,
                tm5.descripcion as categoria,
                tm5.valor as color,
                cli.contacto,
                cli.gerente,
                cli.telefono,
                cli.whatsapp,
                cli.correo,
                cli.direccion,
                cli.estado
                FROM cliente cli
                inner join tablamaestra tm on tm.idtabla=2 and tm.idcolumna=cli.iddocumentoidentidad
                inner join tablamaestra tm5 on tm5.idtabla=5 and tm5.idcolumna=cli.idcategoria and tm5.activo=1 and tm5.idcolumna>0
                inner join usuario us on us.idusuario=cli.idusuariocreacion
                where cli.estado=1
                AND (cli.idusuariocreacion=$idusuario OR $idusuario=0)
                AND (
                    cli.nrodocumento LIKE '%$query%'
                    OR cli.razonsocial LIKE '%$query%'
                    OR cli.nombrecomercial LIKE '%$query%'
                    OR cli.contacto LIKE '%$query%'
                    OR cli.gerente LIKE '%$query%'
                    OR cli.telefono LIKE '$query%'
                    OR cli.whatsapp LIKE '$query%'
                    OR cli.correo LIKE '%$query%'
                    OR cli.direccion LIKE '%$query%'
                    )
                ORDER BY idcliente desc
                LIMIT $limit OFFSET $offset";
        return $this->db->query($query)->result();
    }
    function getAllTotal($idusuario, $query)
    {
        $query = "SELECT
                COUNT(*) as total
                FROM cliente cli
                inner join tablamaestra tm on tm.idtabla=2 and tm.idcolumna=cli.iddocumentoidentidad
                inner join usuario us on us.idusuario=cli.idusuariocreacion
                where cli.estado=1
                AND (cli.idusuariocreacion=$idusuario OR $idusuario=0)
                AND (
                    cli.nrodocumento LIKE '%$query%'
                    OR cli.razonsocial LIKE '%$query%'
                    OR cli.nombrecomercial LIKE '%$query%'
                    OR cli.contacto LIKE '%$query%'
                    OR cli.gerente LIKE '%$query%'
                    OR cli.telefono LIKE '$query%'
                    OR cli.whatsapp LIKE '$query%'
                    OR cli.correo LIKE '%$query%'
                    OR cli.direccion LIKE '%$query%'
                    )";
        return (int) $this->db->query($query)->row()->total;
    }
    function get($id)
    {
        $query = "SELECT
                idcliente,
                iddocumentoidentidad,
                tm.valor as documentoidentidad,
                nrodocumento,
                razonsocial,
                nombrecomercial,
                cli.idcategoria,
                tm5.descripcion as categoria,
                tm5.valor as color,
                contacto,
                gerente,
                telefono,
                whatsapp,
                correo,
                direccion,
                estado
                FROM cliente cli
                inner join tablamaestra tm on tm.idtabla=2 and tm.idcolumna=cli.iddocumentoidentidad
                inner join tablamaestra tm5 on tm5.idtabla=5 and tm5.idcolumna=cli.idcategoria and tm5.activo=1 and tm5.idcolumna>0
                WHERE idcliente = $id";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function getCombo($idusuario)
    {
        $query = "SELECT
                idcliente,
                iddocumentoidentidad,
                tm.valor as documentoidentidad,
                nrodocumento,
                razonsocial,
                nombrecomercial,
                cli.idcategoria,
                tm5.descripcion as categoria,
                tm5.valor as color,
                contacto,
                gerente,
                telefono,
                whatsapp,
                correo,
                direccion,
                estado
                FROM cliente cli
                inner join tablamaestra tm on tm.idtabla=2 and tm.idcolumna=cli.iddocumentoidentidad
                inner join tablamaestra tm5 on tm5.idtabla=5 and tm5.idcolumna=cli.idcategoria and tm5.activo=1 and tm5.idcolumna>0
                where cli.estado=1
                AND cli.idusuariocreacion=$idusuario";
        return $this->db->query($query)->result();
    }
    function checkTotalDocumento($doc, $id_exception = 0)
    {
        $query = "select count(nrodocumento) as total from cliente where nrodocumento = '$doc' AND idcliente != $id_exception AND estado=1";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row()->total;
        }
    }

    function insert($info)
    {
        return $this->db->insert('cliente', $info);
    }

    function getInsert_id()
    {
        return $this->db->insert_id();
    }

    function update($id, $info)
    {
        $this->db->where(array("idcliente" => $id));
        return $this->db->update('cliente', $info);
    }

    function delete($id)
    {
        $this->db->where(array("idcliente" => $id));
        return $this->db->update('cliente', array("estado" => 0));
    }
}
