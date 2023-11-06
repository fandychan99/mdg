<?php

class M_Menu extends CI_Model
{
    private $tbl1 = 'utl_menu';
    private $tbl2 = 'utl_menu_access';
    private $tbl12joinid = 'utl_menu.id = utl_menu_access.menu_id';
    // private $idtbl1 = '';

    function __construct()
    {
        parent::__construct();
    }

    public function get_all_menu_access()
    {
        $this->db->select('*');
        $this->db->from($this->tbl2);
        $this->db->join($this->tbl1, $this->tbl12joinid);
        return $this->db->get()->result_array();
    }

    public function get_access_role($role){
        $query = "SELECT b.menu_id, b.add_mode, b.edit_mode, b.delete_mode, b.pdf_mode, b.excel_mode, a.* FROM utl_menu a left join utl_menu_access b on (a.id = b.menu_id and b.role_id = $role)";
        return $this->db->query($query)->result_array();
    }

    public function save_access($data, $role){
        $this->db->where('role_id', $role);
        $this->db->delete($this->tbl2);

        return $this->db->insert_batch($this->tbl2, $data);
    }

    public function get_menu_acces($role){
        $query = "SELECT b.menu_id, b.add_mode, b.edit_mode, b.delete_mode, b.pdf_mode, b.excel_mode, a.* FROM utl_menu a inner join utl_menu_access b on (a.id = b.menu_id and b.role_id = $role) order by a.order";
        return $this->db->query($query)->result_array();
    }
    
}
