<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_User', 'M_Role', 'M_Sekolah'));

        if (!$this->session->userdata('userid')) {
            redirect('Auth');
        }
    }

    public function index()
    {
        $this->template->display('sekolah/v_index');
    }

    public function ajax_list()
    {
        $list = $this->M_Sekolah->get_datatables();
        $data = array();
        $no = $_POST['start'];
        // 'expense_id',  'invoices',  'ref_id', 'amount', 'note', 'created_at', 'updated_at'
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $url = encrypt_url($customers->code);
            // 
            $btn = "
                    <div class=\"d-flex align-items-center gap-3 fs-6\">
                        
                    <a class=\"text-warning\" title=\"edit data\" onclick=\"edit_data('$url')\" style=\"cursor:pointer\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_add_user\"><i class=\"fa fa-pencil\"></i></a>
                        <a class=\"text-danger\" title=\"delete\" onclick=\"delete_data('$url','$customers->code')\" style=\"cursor:pointer\" ><i class=\"bi bi-trash-fill\"></i></a>
                    </div>";
            $row[] = $btn;
            $row[] = $customers->code;
            $row[] = $customers->tingkat;
            $row[] = $customers->nama;
            $row[] = $customers->region;
            $row[] = $customers->alamat;
            $row[] = $customers->akreditasi;
            $row[] = $customers->akreditasi_no;
            $row[] = $customers->created_by;
            $row[] = $customers->created_date;
            $row[] = $customers->updated_by;
            $row[] = $customers->updated_date;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_Sekolah->count_all(),
            "recordsFiltered" => $this->M_Sekolah->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function save(){
        try {
            // Jika upload berhasil, dapatkan informasi file yang diunggah
            $data_simpan = array(
                'code' => $this->input->post("code"),
                'tingkat' => $this->input->post("tingkat"),
                'nama' => $this->input->post("nama"),
                'region' => $this->input->post("region"),
                'alamat' => $this->input->post("alamat"),
                'akreditasi' => $this->input->post("akreditasi"),
                'akreditasi_no' => $this->input->post("akreditasi_no"),
                "created_by" => $this->session->userdata("userid"),
            );

            // var_dump($data_simpan);

            $data = $this->M_Sekolah->save($data_simpan);
            echo json_encode($data);    
         
        } catch (\Exception $ex) {
            echo json_encode(array('status' => 'failed', 'msg' => $ex->getMessage()));
        }
    }

    
    public function get_byid(){
        $id = decrypt_url($this->input->get("id"));
        $data["header"] = $this->M_Sekolah->get_data_by_id($id);

        echo json_encode($data);
    }

    public function delete(){
        $id = decrypt_url($this->input->get("id"));
        // echo $id;
        $hasil = $this->M_Sekolah->delete_id($id);
        echo json_encode($hasil);
    }   
}
