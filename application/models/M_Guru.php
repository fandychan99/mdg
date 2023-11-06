<?php

class M_Guru extends CI_Model
{
    var $table = 'mst_guru';
    var $column_order = array(null, 'code_sekolah', 'nama', 'nip', 'jenis_kelamin', 'Agama', 'tahun_mengajar', 'alamat', 'no_hp', 'email', 'status');
    var $column_search = array('code_sekolah', 'nama', 'nip', 'jenis_kelamin', 'Agama', 'tahun_mengajar', 'alamat', 'no_hp', 'email', 'status'); //set column field database for datatable searchable 
    var $order = array('nama' => 'asc'); // default order 

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

        if (!empty($_POST['code'])) {
            $this->db->where('code_sekolah', $_POST['code']);
        }

        $this->db->where('is_active', true);

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

        $this->db->where('is_active', true);
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
        if (!empty($_POST['code'])) {
            $this->db->where('code_sekolah', $_POST['code']);
        }
        return $this->db->count_all_results();
    }
    // ================ data table ===========================================

    function save($data)
    {
        try {
            $data_header = array(
                'code_sekolah' => $data['code_sekolah'],
                'nama' => $data['nama'],
                'nip' => $data['nip'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'Agama' => $data['Agama'],
                'tahun_mengajar' => $data['tahun_mengajar'],
                'alamat' => $data['alamat'],
                'no_hp' => $data['no_hp'],
                'email' => $data['email'],
                'status' => $data['status'],
                
            );
            
            // var_dump($data_header);

            if ($data['id'] == "0" || empty($data['id'])) {
                // $data_header = array_push($data_header, array('created_by'  => $data['created_by'], 'created_date' => date("Y-m-d")));
                $data_header['created_by'] = $data['created_by'];
                $data_header['created_date'] = date("Y-m-d");
                $this->db->insert("mst_guru", $data_header);
                // echo "DISINI";
            } else {
                // $data_header = array_push($data_header, array('updated_by'  => $data['created_by'], 'updated_date' => date("Y-m-d")));
                $data_header['updated_by'] = $data['created_by'];
                $data_header['updated_date'] = date("Y-m-d");
                $this->db->where('id', $data['id']);
                $this->db->update("mst_guru", $data_header);
                // echo "DISINA";
            }
            

            if ($this->db->affected_rows() === 1) {
                // echo $this->db->affected_rows()." Berhasil";
                return array("status" => "success", "msg" => "berhasil simpan data");
            } else {
                // echo $this->db->affected_rows()." gagal";
                $error = $this->db->error();
                // var_dump($error);
                if ($error['code'] == 1062) {
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
        $query = "SELECT * FROM mst_guru where id = '$id'";
        return $this->db->query($query)->row_array();
    }


    function delete_id($id)
    {
        $query = "UPDATE mst_guru SET is_active = false where id = '$id'";
        // $query2 = "DELETE FROM utl_user where user_id = '$id'";
        // return $query;
        // $this->db->query($query2);
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

    function get_all()
    {
        return $this->db->get("mst_sekolah")->result();
    }

    function get_bysekolah($id){
        $this->db->where("code_sekolah", $id);
        $this->db->where("is_active", true);
        return $this->db->get("mst_guru")->result();
    }

    
}
