<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_User', 'M_Role', 'M_Sekolah', 'M_Guru'));

        if (!$this->session->userdata('userid')) {
            redirect('Auth');
        }
    }

    public function index()
    {
        $data['sekolah'] = $this->M_Sekolah->get_all();
        $this->template->display('guru/v_index', $data);
    }

    public function ajax_list()
    {
        $list = $this->M_Guru->get_datatables();
        $data = array();
        $no = $_POST['start'];
        // 'code_sekolah', 'nama', 'nip', 'jenis_kelamin', 'Agama', 'tahun_mengajar', 'alamat', 'no_hp', 'email', 'status'
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $url = encrypt_url($customers->id);
            // 
            $btn = "
                    <div class=\"d-flex align-items-center gap-3 fs-6\">
                        
                    <a class=\"text-warning\" title=\"edit data\" onclick=\"edit_data('$url')\" style=\"cursor:pointer\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_add_user\"><i class=\"fa fa-pencil\"></i></a>
                        <a class=\"text-danger\" title=\"delete\" onclick=\"delete_data('$url','$customers->nama')\" style=\"cursor:pointer\" ><i class=\"bi bi-trash-fill\"></i></a>
                    </div>";
            $row[] = $btn;
            $row[] = $customers->nama;
            $row[] = $customers->nip;
            $row[] = $customers->jenis_kelamin;
            $row[] = $customers->Agama;
            $row[] = $customers->tahun_mengajar;
            $row[] = $customers->alamat;
            $row[] = $customers->no_hp;
            $row[] = $customers->email;
            $row[] = $customers->status;
            $row[] = $customers->created_by;
            $row[] = $customers->created_date;
            $row[] = $customers->updated_by;
            $row[] = $customers->updated_date;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_Guru->count_all(),
            "recordsFiltered" => $this->M_Guru->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    

    public function save(){
        try {
            // Jika upload berhasil, dapatkan informasi file yang diunggah
            $data_simpan = array(
                'id' => $this->input->post("id"),
                'code_sekolah' => $this->input->post("code_sekolah"),
                'nama' => $this->input->post("nama"),
                'nip' => $this->input->post("nip"),
                'jenis_kelamin' => $this->input->post("jenis_kelamin"),
                'Agama' => $this->input->post("agama"),
                'tahun_mengajar' => $this->input->post("tahun_mengajar"),
                'alamat' => $this->input->post("alamat"),
                'no_hp' => $this->input->post("no_hp"),
                'email' => $this->input->post("email"),
                'status' => $this->input->post("status"),
                "created_by" => $this->session->userdata("userid"),
            );

            // var_dump($data_simpan);

            $data = $this->M_Guru->save($data_simpan);
            echo json_encode($data);    
         
        } catch (\Exception $ex) {
            echo json_encode(array('status' => 'failed', 'msg' => $ex->getMessage()));
        }
    }

    
    public function get_byid(){
        $id = decrypt_url($this->input->get("id"));
        $data["header"] = $this->M_Guru->get_data_by_id($id);

        echo json_encode($data);
    }

    public function delete(){
        $id = decrypt_url($this->input->get("id"));
        // echo $id;
        $hasil = $this->M_Guru->delete_id($id);
        echo json_encode($hasil);
    }   
}
