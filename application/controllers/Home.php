<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_User', 'M_Role', 'M_Home'));

        if (!$this->session->userdata('userid')) {
            redirect('Auth');
        }
    }

    public function index()
    {       
        $this->template->display('home/v_index');
    }

}