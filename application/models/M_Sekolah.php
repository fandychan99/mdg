<?php

class M_Sekolah extends CI_Model
{
    var $table = 'mst_sekolah';
    var $column_order = array(null, 'code', 'tingkat', 'nama', 'region', 'alamat', 'akreditasi', 'akreditasi_no');
    var $column_search = array('code', 'tingkat', 'nama', 'region', 'alamat', 'akreditasi', 'akreditasi_no'); //set column field database for datatable searchable 
    var $order = array('code' => 'asc'); // default order 

    function __construct()
    {
        parent::__construct();
    }

    // ================ data table ===========================================
    private function _get_datatables_query()
    {
        $user = $this->session->userdata("userid");
        $this->db->from($this->table);
        $i = 0;


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
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    // ================ data table ===========================================

    function save($data)
    {
        try {
            $code = $data['code'];
            $tingkat = $data['tingkat'];
            $nama = $data['nama'];
            $region = $data['region'];
            $alamat = $data['alamat'];
            $akreditasi = $data['akreditasi'];
            $akreditasi_no = $data['akreditasi_no'];
            $user = $data['created_by'];
            $tgl = date("Y-m-d H:i:s");

            $query = "INSERT INTO mst_sekolah (code, tingkat, nama, region, alamat, akreditasi, akreditasi_no, created_by, created_date) values (
                '$code', '$tingkat', '$nama', '$region', '$alamat', '$akreditasi', '$akreditasi_no', '$user', '$tgl'
            ) ON DUPLICATE KEY UPDATE  tingkat = '$tingkat', nama = '$nama', region = '$region',
                     alamat = '$alamat', akreditasi =  '$akreditasi', akreditasi_no = '$akreditasi_no', updated_by = '$user', updated_date = '$tgl'";

            // echo $query;

            $this->db->query($query);
            $pass = password_hash('123456', PASSWORD_DEFAULT);
            $query2 = "INSERT INTO utl_user (user_id, name, password, role_id) values('" . $data['code'] . "' , '" . $data['nama'] . "', '$pass', '2') ON DUPLICATE KEY UPDATE name = values(name) ";
            $this->db->query($query2);

            $error = $this->db->error();
            if ($error['code'] == 0) {
                return array("status" => "success", "msg" => "berhasil simpan data");
            }

            if ($this->db->affected_rows() === 1) {
                // echo $this->db->affected_rows()." Berhasil";
                return array("status" => "success", "msg" => "berhasil simpan data");
            } else {
                // echo $this->db->affected_rows()." gagal";
                $error = $this->db->error();

                if ($error['code'] == 0) {
                    $error_message = 'Tidak Terjadi Perubahan Data Apapun !';
                } else if ($error['code'] == 1062) {
                    // Kesalahan duplicate entry
                    $error_message = 'Terdapat Data Double, Lakukan Penginputan Ulang';
                    // Lakukan tindakan yang sesuai untuk menangani kasus duplikat
                } else {
                    // Kesalahan lainnya
                    $error_message = 'An error occurred: ' . $error['message'];
                }

                return array("status" => "failed", "msg" => $error_message);
            }
        } catch (Exception $e) {
            return array("status" => "failed", "msg" => $e->getMessage());
        }
    }

    function get_data_by_id($id)
    {
        $query = "SELECT * FROM mst_sekolah where code = '$id'";
        return $this->db->query($query)->row_array();
    }


    function delete_id($id)
    {
        $query = "DELETE FROM mst_sekolah where code = '$id'";
        $query2 = "DELETE FROM utl_user where user_id = '$id'";
        // return $query;
        $this->db->query($query2);
        $this->db->query($query);

        if ($this->db->affected_rows() == 1) {
            return array("status" => "success", "msg" => "berhasil hapus data");
        } else {
            $error = $this->db->error();
            // var_dump($error);
            $error_message = 'An error occurred: ' . $error['message'];

            return array("status" => "failed", "msg" => $error_message);
        }
    }

    function get_all(){
        return $this->db->get("mst_sekolah")->result();
    }
}
