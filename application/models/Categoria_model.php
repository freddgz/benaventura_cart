<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Categoria_model extends CI_Model
{
    function getAll()
    {
        $query = "SELECT DISTINCT 
                c.* 
                FROM categorias AS c
                , servicios AS s 
                WHERE c.cod_categoria=s.cod_categoria";
        return $this->db->query($query)->result();
    }
    function getAll_ConServicio()
    {
        $query = "SELECT c.* 
                FROM categorias as c
                where EXISTS (select 1 from servicios as s where s.cod_categoria=c.cod_categoria)";
        return $this->db->query($query)->result();
    }
    function searchServicio($cod_categoria, $texto)
    {
        $query = "SELECT 
        s.* 
        FROM categorias AS c
        , servicios AS s 
        WHERE c.cod_categoria=s.cod_categoria 
        AND c.cod_categoria='$cod_categoria' 
        AND s.titulo LIKE '%" . $texto . "%'";
        return $this->db->query($query)->result();
    }
    function getAll_Subcateoria_IdCategoria($cod_categoria)
    {
        $query = "SELECT DISTINCT 
        c.* 
        FROM sub_categorias AS c
        , servicios AS s 
        WHERE c.cod_sub_cate=s.cod_subcategori AND c.cod_categoria='$cod_categoria'";
        return $this->db->query($query)->result();
    }

    function getSubcategoria($cod_sub_cate)
    {
        $query = "SELECT  
        * 
        FROM sub_categorias
        WHERE cod_sub_cate = '$cod_sub_cate'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    function get($cod_categoria)
    {
        $query = "SELECT 
                * 
                FROM categorias
                WHERE cod_categoria = '$cod_categoria'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function get_nombre($nombre)
    {
        $query = "SELECT 
                * 
                FROM categorias
                WHERE nombre = '$nombre'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
    function getSubcategoria_Nombre($sub_cate)
    {
        $query = "SELECT  
        * 
        FROM sub_categorias
        WHERE nombre = '$sub_cate'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    function deleteByPerfil($id)
    {
        return $this->db->delete("permiso", array("idrol" => $id));
    }
    function getPermisos($prfcod, $show_nodes = true)
    {
        $query = "SELECT DISTINCT
                me.*
                FROM menu as me
                INNER JOIN permiso as pe ON pe.idmenu = me.idmenu";
        if ($show_nodes == true) //para mostrar el menu del usuario
            $query .= " OR me.idmenu IN (SELECT DISTINCT menu.idmenupadre FROM menu
                INNER JOIN permiso ON permiso.idmenu = menu.idmenu
                WHERE permiso.idrol = $prfcod)";
        $query .= " WHERE pe.idrol = $prfcod";
        if ($show_nodes == false) //para check los nodos en el arbol
            $query .= " AND me.url != '#'";
        $query .= " AND me.estado = 1";
        $query .= " ORDER BY orden";
        return $this->db->query($query)->result();
    }
    function insertPermiso($info)
    {
        return $this->db->insert('permiso', $info);
    }

    function getInsert_id()
    {
        return $this->db->insert_id();
    }
}
