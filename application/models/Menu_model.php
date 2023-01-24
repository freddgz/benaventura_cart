<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Menu_model extends CI_Model
{
    function getAll()
    {
        $query = "SELECT * FROM menu 
        ORDER BY orden";
        return $this->db->query($query)->result();
    }

    function getByUrl($url)
    {
        $query = "SELECT 
                menu.idmenu,menu.nombre,menu.idmenupadre,menu.url,menu.icon,
                menu_padre.idmenu p_idmenu,
                menu_padre.nombre p_nombre,
                menu_padre.idmenupadre p_idmenupadre,
                menu_padre.url p_url,
                menu_padre.icon p_icon
                FROM menu menu 
                LEFT JOIN menu menu_padre on menu_padre.idmenu=menu.idmenupadre
                where menu.url='$url'";
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
