<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_User', 'M_Role'));

        if (!$this->session->userdata('userid')) {
            redirect('Auth');
        }
    }

    public function index()
    {
        $data['_role'] = $this->M_Role->get_role_for_select();
        $this->template->display('user/v_index', $data);
    }

    public function ajax_list()
    {
        $list = $this->M_User->get_datatables();
        $data = array();
        $no = $_POST['start'];
        // user_id', 'name', 'nik', 'role_id', 'sex', 'phone', 'born', 'email', 'address', 'role'
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $url = encrypt_url($customers->user_id);
            // 
            $btn = "
                    <div class=\"d-flex align-items-center gap-3 fs-6\">
                        
                    <a class=\"text-warning\" title=\"edit data\" onclick=\"edit_data('$url')\" style=\"cursor:pointer; color:orange\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_add_user\"><i class=\"fa fa-pencil\"></i></a>
                        <a class=\"text-danger\" title=\"delete\" onclick=\"delete_data('$url','$customers->name')\" style=\"cursor:pointer; color:red\" ><i class=\"bi bi-trash-fill\"></i></a>
                        <a class=\"text-danger\" title=\"reset\" onclick=\"reset('$url','$customers->name')\" style=\"cursor:pointer; color:green\" ><i class=\"fa-solid fa-arrows-spin\"></i></a>
                    </div>";
            $row[] = $btn;
            $row[] = $customers->user_id;
            $row[] = $customers->name;
            $row[] = $customers->role;
            $status = ($customers->is_nonactive ? 'NON AKTIVE' : ($customers->is_locked ? 'AKUN DI KUNCI' : 'AKTIF'));
            $row[] = $status;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_User->count_all(),
            "recordsFiltered" => $this->M_User->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }


    public function generate()
    {
        $currentMonth = date('Ym'); // Format Tahun dan Bulan
        $lastOrderNumber = $this->getLastOrderNumber($currentMonth);

        if ($lastOrderNumber === false) {
            $newOrderNumber = $currentMonth . '00001'; // Jika belum ada pesanan untuk bulan ini
        } else {
            $newOrderNumber = $currentMonth . str_pad(($lastOrderNumber + 1), 5, '0', STR_PAD_LEFT);
        }

        echo $newOrderNumber;
    }

    // Fungsi untuk mendapatkan nomor pesanan terakhir untuk bulan ini
    private function getLastOrderNumber($currentMonth)
    {
        $query = "SELECT MAX(CAST(SUBSTRING(invoices, 7) AS UNSIGNED)) AS last_order
                    FROM expand
                WHERE SUBSTRING(invoices, 1, 6)  = '$currentMonth'";

        $result = $this->db->query($query)->row_array();

        if (!empty($result)) {
            return $result['last_order'];
        } else {
            return false;
        }
    }

    public function save()
    {
        $password = $this->input->post('password');


        try {
            $data =  array(
                'user_id' => $this->input->post('user_id'),
                'name' => $this->input->post('name'),
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role'),
            );

            $hasil = $this->M_User->register($data);
            if ($hasil['status'] == 'success') {
                echo json_encode(array('status' => 'success', 'msg' => 'Berhasil Simpan Data !'));
            } else {
                echo json_encode(array('status' => 'error', 'msg' => $hasil['error']['message']));
            }
        } catch (\Exception $th) {
            echo json_encode(array('status' => 'error', 'msg' => $th->getMessage()));
        }
    }

    public function edit()
    {
        try {
            $data =  array(
                'user_id' => $this->input->post('user_id'),
                'name' => $this->input->post('name'),
                'role_id' => $this->input->post('role'),
                'updated_by' => $this->session->userdata("userid")
            );
    
            $hasil = $this->M_User->edit($data,  $this->input->post('user_id'));
            if($hasil['status'] == 'success'){
                echo json_encode(array('status' => 'success', 'msg' => 'Berhasil Update Data !'));
            }
            else{
                echo json_encode(array('status' => 'error', 'msg' => $hasil['error']['message']));
            }
        } catch (\Exception $th) {
            echo json_encode(array('status' => 'error', 'msg' => $th->getMessage() ));
        }
    }


    public function get_byid()
    {
        $id = decrypt_url($this->input->get("id"));
        $data["header"] = $this->M_User->get_data_by_id($id);

        echo json_encode($data);
    }

    public function delete()
    {
        $id = decrypt_url($this->input->get("id"));
        $hasil = $this->M_User->delete_id($id);
        echo json_encode($hasil);
    }

    public function reset(){
        $id = decrypt_url($this->input->get("id"));
        $hasil = $this->M_User->reset($id);
        echo json_encode($hasil);
    }
}
