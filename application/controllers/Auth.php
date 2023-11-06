<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_User', 'M_Menu'));
    }

    function index()
    {
        $this->load->view('auth/v_index');
    }

    function login()
    {
        $userid = $this->input->post('user_id');
        $password = $this->input->post('password');

        $user = $this->M_User->get_by_id($userid);

        if (empty($user)) {
            echo json_encode(array('status' => 'failed', 'msg' => 'user not found !!!'));
            return;
        }

        if ($user->is_locked) {
            echo json_encode(array('status' => 'failed', 'msg' => 'locked user, please contact your administrator !!!'));
            return;
        }

        if (password_verify($password, $user->password)) {
            $menu = $this->M_Menu->get_menu_acces($user->role_id);
            $this->session->set_userdata('userid', $user->user_id);
            $this->session->set_userdata('username', $user->name);
            $this->session->set_userdata('role', $user->role_id);
            $this->session->set_userdata('user_image', $user->image);
            $this->session->set_userdata('menu', $menu);
            echo json_encode(array('status' => 'success', 'msg' => 'Successfull to Login'));
            return;
        } else {
            echo json_encode(array('status' => 'failed', 'msg' => 'Your Password is Incorrect !!!'));
            return;
        }
    }

    function log_out()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }

    function cek_menu()
    {
        $menu = $this->session->userdata('menu');
        echo json_encode($menu);
    }

    function register()
    {
        $this->load->view('auth/v_register');
    }

    function register_save()
    {

        $password = $this->input->post('password');

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $symbol = preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $password);

        if (!$uppercase || !$lowercase || !$number ||  !$symbol || strlen($password) <= 8) {
            echo json_encode(array('status' => 'error', 'msg' => 'PASSWORD MUST CONSIST OF UPPERCASE, SMALL, NUMBERS AND SYMBOLS !'));
            return;
        }

        try {
            $data =  array(
                'user_id' => $this->input->post('user_id'),
                'name' => $this->input->post('name'),
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'role_id' => $this->input->post('access'),
                'android_access' => 0,
                'web_access' => 0,
            );

            $hasil = $this->M_User->register($data);
            if ($hasil['status'] == 'success') {
                echo json_encode(array('status' => 'success', 'msg' => 'Success To Save Data  !'));
            } else {
                echo json_encode(array('status' => 'error', 'msg' => $hasil['error']['message']));
            }
        } catch (\Exception $th) {
            echo json_encode(array('status' => 'error', 'msg' => $th->getMessage()));
        }

        // var_dump($hasil);

    }

    function change_password()
    {
        $username = $this->session->userdata('userid');
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $confirmation = $_POST['confirmation'];

        $user = $this->M_User->get_by_id($username);

        if (!password_verify($oldpassword, $user->password)) {
            $data = array(
                'status'  => 'failed',
                'message' => 'Password Lama Anda Salah.'
            );
            echo json_encode($data);
        } else {
            if (strlen($newpassword) == $_POST['oldpassword']) {
                $data = array(
                    'status'  => 'failed',
                    'message' => 'Password baru dan lama sama.'
                );
                echo json_encode($data);
            } else if ($newpassword != $confirmation) {
                $data = array(
                    'status'  => 'failed',
                    'message' => 'Password dan Konfirmasi Tidak Sama.'
                );
                echo json_encode($data);
            }
            // else if(strlen($newpassword) < 8){
            //     $data = array(
            //         'status'  => 'failed',
            //         'message' => 'Password minimal 8 karakter.'
            //     );
            //     echo json_encode($data);
            // } else if (!preg_match("#[0-9]+#", $newpassword)){
            //     $data = array(
            //         'status'  => 'failed',
            //         'message' => 'Password wajib mengandung angka.'
            //     );
            //     echo json_encode($data);
            // } else if (!preg_match("#[a-z]+#", $newpassword)){
            //     $data = array(
            //         'status'  => 'failed',
            //         'message' => 'Password wajib mengandung huruf kecil.'
            //     );
            //     echo json_encode($data);
            // } else if (!preg_match("#[A-Z]+#", $newpassword)){
            //     $data = array(
            //         'status'  => 'failed',
            //         'message' => 'Password wajib mengandung huruf kapital.'
            //     );
            //     echo json_encode($data);
            // } 
            else {
                $new = password_hash($newpassword, PASSWORD_DEFAULT);

                if ($this->db->query("UPDATE utl_user set password = '$new' where user_id = '$username'")) {
                    $data = array(
                        'status'  => 'success',
                        'message' => 'Password Berhasil diPerbaharui.'
                    );
                    echo json_encode($data);
                } else {
                    $data = array(
                        'status'  => 'failed',
                        'message' => 'Gagal Mengganti Password.'
                    );
                    echo json_encode($data);
                }
            }
        }
    }
}
