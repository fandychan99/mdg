<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tamsil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_User', 'M_Role', 'M_Sekolah', 'M_Guru', 'M_Tamsil'));
        $this->load->library('upload');
        $this->load->helper('url');
        $this->load->helper('form');


        if (!$this->session->userdata('userid')) {
            redirect('Auth');
        }
    }

    public function index()
    {
        $id = $this->session->userdata("userid");
        $data['guru'] = $this->M_Guru->get_bysekolah($id);
        // var_dump($guru);
        $this->template->display('tamsil/v_index', $data);
    }

    public function ajax_list()
    {
        $list = $this->M_Tamsil->get_datatables();
        $data = array();
        $no = $_POST['start'];
        // 'no_pengajuan', 'code_sekolah', 'id_guru', 'periode', 'tahun', 'status', 'reason', 'jenis', 'nama_sekolah', 'nama_guru', 'status_guru');
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $url = encrypt_url($customers->id);
            
            if($customers->status == "Diterima" || $customers->status == "Batal"){
                $btn = "";
            }elseif($customers->status == "Ditolak"){
                $btn = "
                    <div class=\"d-flex align-items-center gap-3 fs-6\">
                        <a class=\"text-warning\" title=\"edit data\" onclick=\"edit_data('$url')\" style=\"cursor:pointer\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_add_user\"><i class=\"fa fa-pencil\"></i></a>
                    </div>";
            }else{
                $btn = "
                    <div class=\"d-flex align-items-center gap-3 fs-6\">
                        <a class=\"text-warning\" title=\"edit data\" onclick=\"edit_data('$url')\" style=\"cursor:pointer\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_add_user\"><i class=\"fa fa-pencil\"></i></a>
                        <a class=\"text-danger\" title=\"delete\" onclick=\"delete_data('$url','$customers->no_pengajuan')\" style=\"cursor:pointer\" ><i class=\"bi bi-trash-fill\"></i></a>
                    </div>";
            }
            
            $row[] = $btn;
            $row[] = $customers->no_pengajuan;
            $row[] = $customers->nama_guru;
            $row[] = $customers->periode;
            $row[] = $customers->tahun; 
            $icon = !empty($customers->file_name) ? "fa fa-eye" : "fa-eye-slash";
            $btn2 = "
            <div class=\"d-flex align-items-center gap-3 fs-6\">
                <a class=\"text-warning\" title=\"view data\" onclick=\"view_data('$customers->file_name')\" style=\"cursor:pointer\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_view\"><i class=\"$icon\"></i></a>
            </div>";
            $row[] = $btn2;
            $row[] = $customers->status;
            $row[] = $customers->reason;
            $row[] = $customers->created_by;
            $row[] = $customers->created_date;
            $row[] = $customers->updated_by;
            $row[] = $customers->updated_date;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_Tamsil->count_all(),
            "recordsFiltered" => $this->M_Tamsil->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    
    

    public function save(){
        try {
            // Jika upload berhasil, dapatkan informasi file yang diunggah
            $data_simpan = array(
                'id' => $this->input->post('id'),
                'no_pengajuan' => $this->input->post('no_pengajuan'),
                'code_sekolah' => $this->session->userdata("userid"),
                'id_guru' => $this->input->post('id_guru'),
                'periode' => $this->input->post('periode'),
                'tahun' => $this->input->post('tahun'),
                'jenis' => 'TAMSIL',
                "created_by" => $this->session->userdata("userid"),
            );

            $config['upload_path'] = './uploads/tamsil'; // Tentukan direktori penyimpanan gambar
            $config['allowed_types'] = 'pdf'; // Jenis file yang diizinkan
            $config['max_size'] = 2048; // Batasan ukuran file (dalam kilobyte)
            // $new_name =   
            $config['file_name'] = "tamsil-" . bin2hex(random_bytes(24));

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file')) {
                // Jika upload gagal, tampilkan pesan error
                $error = $this->upload->display_errors();
                // echo $error;
                // echo json_encode(array('status' => 'failed', 'msg' => 'Error simpan cover : ' . $error . ''));
            } else {
                // Jika upload berhasil, dapatkan informasi file yang diunggah
                $data = $this->upload->data();
                $data_simpan["file_name"] = $data['file_name']; 
            }

            $data = $this->M_Tamsil->save($data_simpan);
            echo json_encode($data);    
         
        } catch (\Exception $ex) {
            echo json_encode(array('status' => 'failed', 'msg' => $ex->getMessage()));
        }
    }

    
    public function get_byid(){
        $id = decrypt_url($this->input->get("id"));
        $data["header"] = $this->M_Tamsil->get_data_by_id($id);

        echo json_encode($data);
    }

    public function delete(){
        $id = decrypt_url($this->input->get("id"));
        // echo $id;
        $hasil = $this->M_Tamsil->delete_id($id);
        echo json_encode($hasil);
    }   
}
