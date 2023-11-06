<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Access{
    protected $_CI;
    function __construct(){
        $this->_CI=&get_instance();
    }

    function get_access($url, $type = "view_mode"){
        $list_menu = $this->_CI->session->userdata('menu');

        $menu_access =  array_filter($list_menu, function ($obj) use ($url) {
            return $obj['url'] === $url;
        });

        if(empty($menu_access))
            return array("access" => "denied", "msg" => "Anda tidak berhak mengakses menu ini");

        return array("access" => "allowed", "data" => array_shift($menu_access));
    }
}