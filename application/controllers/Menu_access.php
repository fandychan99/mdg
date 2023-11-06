<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_access extends CI_Controller
{
    private $menu_access;
    private $data_access;
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Menu', 'M_Role'));

        if (!$this->session->userdata('userid')) {
            redirect('Auth');
        }

        // $this->menu_access = $this->user_access->get_access('C_Menu_Access');
        // if($this->menu_access["access"] == "denied"){
        //     redirect('C_Home?msg=you are not entitled to access the Appointmen menu !!!');
        // }
        // $this->data_access = $this->menu_access["data"];
    }

    function index()
    {
        $data['_role'] = $this->M_Role->get_role_for_select();
        $this->template->display('menu_access/v_index', $data);
    }

    function get_menu()
    {
        $role = $this->input->get('role');

        $data['_list_menu'] = $this->M_Menu->get_access_role($role);
        $this->load->view('menu_access/v_ajaxmenu', $data);
    }

    function add()
    {
        try {
            // if($this->data_access["add_mode"] == 0){
            //     throw new Exception("Anda tidak berhak untuk melakukan modifikasi terhadap menu ini !!!");
            // }   

            $role = $this->input->post("role");
            $akses = $this->input->post("chk_akses");
            $add = $this->input->post("chk_add");
            $edit = $this->input->post("chk_edit");
            $delete = $this->input->post("chk_delete");
            $pdf = $this->input->post("chk_pdf");
            $excel = $this->input->post("chk_excel");

            $data_menu = array();
            if (!empty($akses)) {
                $i = 0;
                foreach ($akses as $r) {
                    $data_input = array(
                        'menu_id ' => $r,
                        'role_id ' => $role,
                        'add_mode ' => !empty($add) ? in_array($r, $add) : false,
                        'edit_mode ' => !empty($edit) ? in_array($r, $edit) : false,
                        'delete_mode ' => !empty($delete) ? in_array($r, $delete) : false,
                        'pdf_mode ' => !empty($pdf) ? in_array($r, $pdf) : false,
                        'excel_mode ' => !empty($excel) ? in_array($r, $excel) : false,
                        'updated_by ' => 0,
                        'updated_date ' => 0,
                        'ip ' => 0
                    );
                    // $i++;
                    array_push($data_menu, $data_input);
                }
            }

            $this->M_Menu->save_access($data_menu, $role);
            $msg = array("status" => "success", "msg" => "Berhasil Update access menu user", "data" =>  "");
            echo json_encode($msg);
        } catch (\Exception $th) {
            $msg = array("status" => "failed", "msg" => $th->getMessage());
            echo json_encode($msg);
        }
    }
}
