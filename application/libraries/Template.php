<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template{
    protected $_CI;
    function __construct(){
        $this->_CI=&get_instance();
        $this->_CI->load->model('M_Menu');
    }
	
    function display($template, $data = null){		
        $role = $this->_CI->session->userdata('role');
        $menu = $this->_CI->M_Menu->get_menu_acces($role);
        $data['_list_menu'] = $menu;

		$data['_header']=$this->_CI->load->view('template/header',$data,true);
		$data['_menu']=$this->_CI->load->view('template/menu',$data,true);
		$data['_content']=$this->_CI->load->view($template,$data,true);
		
        $this->_CI->load->view('/template.php',$data);
    }
	
}