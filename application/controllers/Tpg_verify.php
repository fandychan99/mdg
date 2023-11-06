<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tpg_verify extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_User', 'M_Role', 'M_Sekolah', 'M_Guru', 'M_Tpg_Verify'));
        $this->load->library('upload');
        $this->load->helper('url');
        $this->load->helper('form');


        if (!$this->session->userdata('userid')) {
            redirect('Auth');
        }
    }

    public function index()
    {
        // $id = $this->session->userdata("userid");
        // $data['guru'] = $this->M_Guru->get_bysekolah($id);
        // var_dump($guru);
        $data['sekolah'] = $this->M_Sekolah->get_all();

        $this->template->display('tpg_verify/v_index', $data);
    }

    public function ajax_list()
    {
        $list = $this->M_Tpg_Verify->get_datatables();
        $data = array();
        $no = $_POST['start'];
        // 'no_pengajuan', 'code_sekolah', 'id_guru', 'periode', 'tahun', 'status', 'reason', 'jenis', 'nama_sekolah', 'nama_guru', 'status_guru');
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $url = encrypt_url($customers->id);
            $icon = !empty($customers->file_name) ? "fa fa-eye" : "fa-eye-slash";
            $btn2 = "
            <div class=\"d-flex align-items-center gap-3 fs-6\">
                <a class=\"text-warning\" title=\"view data\" onclick=\"view_data('$customers->file_name', '$customers->id', '$customers->no_pengajuan')\" style=\"cursor:pointer\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_view\"><i class=\"$icon\"></i></a>
            </div>";
            $row[] = $btn2;
            $row[] = $customers->nama_sekolah;
            $row[] = $customers->no_pengajuan;
            $row[] = $customers->nama_guru;
            $row[] = $customers->periode;
            $row[] = $customers->tahun;
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
            "recordsTotal" => $this->M_Tpg_Verify->count_all(),
            "recordsFiltered" => $this->M_Tpg_Verify->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }


    function save()
    {
        try {
            $data_simpan = array(
                'id' => $this->input->post('id'),
                'no_pengajuan' => $this->input->post('no_pengajuan'),
                'status' => $this->input->post('status_pengajuan'),
                'reason' => $this->input->post('reason'),
                "created_by" => $this->session->userdata("userid"),
            );

            $data = $this->M_Tpg_Verify->save($data_simpan);
            echo json_encode($data);
        } catch (\Exception $ex) {
            echo json_encode(array('status' => 'failed', 'msg' => $ex->getMessage()));
        }
    }
}
