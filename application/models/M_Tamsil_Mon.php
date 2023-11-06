<?php

class M_Tamsil_Mon extends CI_Model
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

        $this->db->where('jenis', 'TAMSIL');

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


        // $this->db->where('is_active', true);

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
        // if (!empty($_POST['code'])) {
            $user = $this->session->userdata("userid");
            $this->db->where('code_sekolah', $user);

            $this->db->where('jenis', 'TAMSIL');

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
        // }
        return $this->db->count_all_results();
    }
    // ================ data table ===========================================

    

    
}
