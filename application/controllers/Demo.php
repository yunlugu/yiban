<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller{

    public $data;
    function __construct(){
        parent::__construct();
        //当前应用文件夹
        $params = array('app' => 'demo');
        $this->load->library('Use_smarty', $params, 'smarty');
    }

    function index(){
        $this->data['title'] = 'demo';
        $this->smarty->main_view('welcome_message', $this->data);
    }

    function logout(){
        $this->session->sess_destroy();
        redirect();//回到首页
    }
}
