<?php

class M_Tpg_Verify extends CI_Model
{
    var $table = 'vw_pengajuan';
    var $column_order = array(null, 'no_pengajuan', 'code_sekolah', 'id_guru', 'periode', 'tahun', 'status', 'reason', 'jenis', 'nama_sekolah', 'nama_guru', 'status_guru', 'file_name');
    var $column_search = array('no_pengajuan', 'code_sekolah', 'id_guru', 'periode', 'tahun', 'status', 'reason', 'jenis', 'nama_sekolah', 'nama_guru', 'status_guru', 'file_name'); //set column field database for datatable searchable 
    var $order = array('no_pengajuan' => 'desc'); // default order 

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

        // if (!empty($_POST['code'])) {
        // $this->db->where('code_sekolah', $user);
        // }

        // $this->db->where('is_active', true);
        $this->db->where('jenis', 'TPG');

        if (!empty($_POST['sekolah']) && $_POST['sekolah'] !=  'All') {
            // echo "1";
            $this->db->where('code_sekolah', $_POST['sekolah']);
        }

        if (!empty($_POST['periode']) && $_POST['periode'] !=  'All') {
            $this->db->where('periode', $_POST['periode']);
        }

        if (!empty($_POST['tahun']) && $_POST['tahun'] !=  'All') {
            $this->db->where('tahun', $_POST['tahun']);
        }

        if (!empty($_POST['status']) && $_POST['status'] !=  'All') {
            // echo $_POST['status'];
            $this->db->where('status', $_POST['status']);
        }

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

        // $this->db->where('is_active', true);
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

        $this->db->where('jenis', 'TPG');

        if (!empty($_POST['sekolah']) && $_POST['sekolah'] !=  'All') {
            // echo "1";
            $this->db->where('code_sekolah', $_POST['sekolah']);
        }

        if (!empty($_POST['periode']) && $_POST['periode'] !=  'All') {
            $this->db->where('periode', $_POST['periode']);
        }

        if (!empty($_POST['tahun']) && $_POST['tahun'] !=  'All') {
            $this->db->where('tahun', $_POST['tahun']);
        }

        if (!empty($_POST['status']) && $_POST['status'] !=  'All') {
            // echo $_POST['status'];
            $this->db->where('status', $_POST['status']);
        }

        return $this->db->count_all_results();
    }
    // ================ data table ===========================================

    function save($data)
    {
        try {
            // echo  $data['reason'];
            // echo $data['id'];
            $data_header = array(
                'status' => $data['status'],
                'reason' => $data['reason'],
                'updated_by' => $data['created_by'],
                'updated_date' => date("Y-m-d")
            );
                
            $this->db->where('id', $data['id']);
            $this->db->update("trn_pengajuan", $data_header);
          
            


            if ($this->db->affected_rows() === 1) {
                // echo $this->db->affected_rows()." Berhasil";
                return array("status" => "success", "msg" => "berhasil simpan data");
            } else {
                // echo $this->db->affected_rows()." gagal";
                $error = $this->db->error();
                // var_dump($error);
                if($error['code'] == 1062) {
                    $error_message = 'Data sudah di Approve';
                }else if ($error['code'] == 1062) {
                    // Kesalahan duplicate entry
                    $error_message = 'Sudah dilakukan pengajuan untuk data ini, mohon periksa kembali data anda';
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
        $query = "SELECT * FROM trn_pengajuan where id = '$id'";
        return $this->db->query($query)->row_array();
    }


    function get_nomor_pengajuan($sekolah, $jenis, $tw, $tahun)
    {
        $query = "SELECT generate_nomor_pengajuan('$sekolah', '$jenis', '$tw', $tahun) as no; ";

        return $this->db->query($query)->row()->no;
    }


    function delete_id($id)
    {
        $query = "DELETE FROM  trn_pengajuan where id = '$id'";
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
}
