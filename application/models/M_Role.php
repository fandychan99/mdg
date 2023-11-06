<?php

class M_Role extends CI_Model
{
    private $tbl = "utl_role";
    
    public function get_role_for_select(){
        $this->db->select('role_id, role');
        $this->db->from($this->tbl);
        $sql = $this->db->get();
        if ($sql->num_rows() > 0) {
            $result[''] = 'Select';
            foreach ($sql->result_array() as $row) {
                $result[$row['role_id']] = ucwords(strtoupper($row['role']));
            }
            return $result;
        } else {
            echo "Not data avaible";
        }
    }
    
    public function get_all(){
        return $this->db->get($this->tbl);
    }
}