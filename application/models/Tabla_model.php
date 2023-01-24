<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tabla_model extends CI_Model
{
    function getTree()
    {
        $query = "SELECT
                id,
                idtabla,
                idcolumna,
                descripcion,
                case when idcolumna=0 then 0 else (select tbl.id from tablamaestra tbl where tbl.idcolumna=0 and tbl.idtabla=tabla.idtabla) end as id_padre,
                case when idcolumna=0 then 0 else (select tbl.descripcion from tablamaestra tbl where tbl.idcolumna=0 and tbl.idtabla=tabla.idtabla) end as descripcion_padre,
                valor,
                activo
                FROM tablamaestra tabla
                order by idtabla,idcolumna";
        return $this->db->query($query)->result();
    }
    function getTabla($idtabla)
    {
        $query = "select
                *
                from tablamaestra
                where idtabla=$idtabla and idcolumna!=0 and activo=1";
        return $this->db->query($query)->result();
    }
    function getTablaPagged($idtabla, $query, $offset, $limit)
    {
        $query = "SELECT
                *
                from tablamaestra
                where idtabla=$idtabla and idcolumna!=0 and activo=1
                and (
                    descripcion LIKE '%$query%'
                    OR valor LIKE '%$query%'
                    )
                ORDER BY idcolumna desc
                LIMIT $limit OFFSET $offset";
        return $this->db->query($query)->result();
    }
    function getAllTotal($idtabla, $query)
    {
        $query = "SELECT
                COUNT(*) as total
                from tablamaestra
                where idtabla=$idtabla and idcolumna!=0 and activo=1
                and (
                    descripcion LIKE '%$query%'
                    OR valor LIKE '%$query%'
                    )";
        return (int) $this->db->query($query)->row()->total;
    }
    function getTablaByValor($idtabla, $valor)
    {
        $query = "select * from tablamaestra where activo=1 and idtabla=$idtabla and instr(valor,',$valor,')";
        return $this->db->query($query)->result();
    }
    function getTablaByIds($idtabla, $ids)
    {
        $query = "select * from tablamaestra where activo=1 and idtabla=$idtabla and instr('$ids',concat(',',idcolumna,','))";
        return $this->db->query($query)->result();
    }

    function get($idtabla)
    {
        $query = "select * from tablamaestra where idtabla=$idtabla and idcolumna=0";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    function getItem($idtabla, $idcolumna)
    {
        $query = "select * from tablamaestra where idtabla=$idtabla and idcolumna=$idcolumna";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function getItemById($id)
    {
        $query = "select *,
                case when idcolumna=0 then 0 else (select tbl.id from tablamaestra tbl where tbl.idcolumna=0 and tbl.idtabla=tabla.idtabla) end as id_padre,
                case when idcolumna=0 then 0 else (select tbl.descripcion from tablamaestra tbl where tbl.idcolumna=0 and tbl.idtabla=tabla.idtabla) end as descripcion_padre
                from tablamaestra as tabla where id=$id";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    function getNewIdColumna($idtabla)
    {
        $query = "select ifnull(max(idcolumna),0) + 1 as id from tablamaestra where activo=1 and idtabla=$idtabla";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row()->id;
        }
    }
    function getNewIdTabla()
    {
        $query = "select ifnull(max(idtabla),0) + 1 as id from tablamaestra where activo=1 and idtabla<1000";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row()->id;
        }
    }

    function insert($info)
    {
        return $this->db->insert('tablamaestra', $info);
    }

    function getInsert_id()
    {
        return $this->db->insert_id();
    }

    function update($idtabla, $idcolumna, $info)
    {
        $this->db->where(array("idtabla" => $idtabla, "idcolumna" => $idcolumna));
        return $this->db->update('tablamaestra', $info);
    }
    function updateItem($id, $info)
    {
        $this->db->where(array("id" => $id));
        return $this->db->update('tablamaestra', $info);
    }

    function delete($idtabla, $idcolumna)
    {
        $this->db->where(array("idtabla" => $idtabla, "idcolumna" => $idcolumna));
        return $this->db->update('tablamaestra', array("activo" => 0));
    }
    function deletebyid($id)
    {
        $this->db->where(array("id" => $id));
        return $this->db->update('tablamaestra', array("activo" => 0));
    }
    function deleteItem($id)
    {
        return $this->db->delete('tablamaestra', array("id" => $id));
    }
    function countUsedCategoria($id)
    {
        $query = "SELECT
                COUNT(*) as total
                FROM tablamaestra tm
                inner join agenda agd on agd.idcategoria=tm.idcolumna and agd.activo=1
                where tm.idtabla=3 and tm.idcolumna=$id";
        return (int) $this->db->query($query)->row()->total;
    }
    function countUsedEstadoAgenda($id)
    {
        $query = "SELECT
                COUNT(*) as total
                FROM tablamaestra tm
                inner join agenda agd on agd.idestado=tm.idcolumna and agd.activo=1
                where tm.idtabla=4 and tm.idcolumna=$id";
        return (int) $this->db->query($query)->row()->total;
    }
    function countUsedEstadoCliente($id)
    {
        $query = "SELECT
                COUNT(*) as total
                FROM tablamaestra tm
                inner join cliente cli on cli.idcategoria=tm.idcolumna
                where tm.idtabla=5 and tm.idcolumna=$id";
        return (int) $this->db->query($query)->row()->total;
    }
}
