<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_User extends CI_Model {
    private $tbluser = 'utl_user';
    private $id = 'utl_user.user_id';
    private $vwuser = 'vw_user';
    private $role = 'role_id';


    var $table = 'vw_user';
    var $column_order = array(null, 'user_id', 'name', 'nik', 'role_id', 'sex', 'phone', 'born', 'email', 'address', 'role');
    var $column_search = array('user_id', 'name', 'nik', 'role_id', 'sex', 'phone', 'born', 'email', 'address', 'role'); //set column field database for datatable searchable 
    var $order = array('user_id' => 'asc'); // default order 

    function __construct()
    {
        parent::__construct();
    }
    // 'id','name','created_by','crated_date','updated_by','updated_date'
    // ================ data table ===========================================
    private function _get_datatables_query()
    {
        $user = $this->session->userdata("userid");
        $this->db->from($this->table);
        // $this->db->where("created_by", $user);
        $i = 0;

        // if (!empty($_POST['tanggal_awal']) && !empty($_POST['tanggal_akhir'])) {
        //     $this->db->where('created_at >=', $_POST['tanggal_awal']);
        //     $this->db->where('created_at <=', $_POST['tanggal_akhir']);
        // }

        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        // if (!empty($_POST['tanggal_awal']) && !empty($_POST['tanggal_akhir'])) {
        //     $this->db->where('created_at >=', $_POST['tanggal_awal']);
        //     $this->db->where('created_at <=', $_POST['tanggal_akhir']);
        // }
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    // ================ data table ===========================================


    public function get_all(){
        return $this->db->get($this->vwuser)->result();
    }

    public function get_by_id($id){
        $this->db->where($this->id, $id);
        return $this->db->get($this->tbluser)->row();
    }

    public function register($data){
        
        if(!$this->db->insert($this->tbluser, $data)){
            return array("status" => "failed", "error" => $this->db->error());
        }else{
            $user_id = $data["user_id"];
            $role = $data["role_id"];
            // $tbl = ($role == 2 ? "utl_user_doctor" : "utl_user_patient");
            // $this->db->query("INSERT INTO $tbl (user_id) values ('$user_id')");
            return array("status" => "success", "error" => "");
        }

    }

    public function edit($data, $id){
        $this->db->where("user_id", $id);
        if(!$this->db->update($this->tbluser, $data)){
            return array("status" => "failed", "error" => $this->db->error());
        }else{
            return array("status" => "success", "error" => "");
        }

    }

    public function get_profile($id){
        $query = "SELECT * FROM vw_user where user_id = '$id'";       
        return $this->db->query($query)->row();
    }

    function get_data_by_id($id)
    {
        $query = "SELECT * FROM vw_user where user_id = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function delete_id(){
        $id = decrypt_url($this->input->get("id"));
        $query = "DELETE FROM utl_user where user_id = '$id'";

        // return $this->db->query($query);
        $hapus = $this->db->query($query);

        if($hapus){
            return array("status" => "success", "msg" => "Berhasil menghapus");
        }else{
            return array("status" => "failed", "msg" => "Gagal menghapus");
        }
    }

    public function reset(){
        $id = decrypt_url($this->input->get("id"));
        $pass = password_hash('123456', PASSWORD_DEFAULT);
        $query = "UPDATE utl_user SET password = '$pass' where user_id = '$id'";

        // return $this->db->query($query);
        $hapus = $this->db->query($query);

        if($hapus){
            return array("status" => "success", "msg" => "Berhasil Mereset Password");
        }else{
            return array("status" => "failed", "msg" => "Gagal Mereset Password");
        }
    }

    public function user_exist($id){

    }

    
}