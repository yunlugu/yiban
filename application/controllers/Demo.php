<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Qiandao extends CI_Controller{

    public $data;
    function __construct(){
        parent::__construct();
        // header("Location: http://www.baidu.com");
        $this->load->model('Qiandao_model');
        //当前应用文件夹
        $params = array('app' => 'qiandao/app');
        $this->load->library('Use_smarty', $params, 'smarty');
        //当前应用参数
        
        $config = array('appID' => '2d86cc3a8dde262c',
                        'appSecret' => 'd689e394669dcdb007d5f36ae04376f1',
                        'callback' => "http://f.yiban.cn/iapp53525");
        $this->load->library('YibanSDK', $config, 'yiban');
        if (empty($this->session->token)) {
            try {
                /**
                 * 调用perform()验证授权，若未授权会自动重定向到授权页面
                 * 授权成功返回的数组中包含用户基本信息及访问令牌信息
                 */
                $info = $this->yiban->getFrameUtil()->perform();
                
                print_r($info);   // 可以输出info数组查看
                                    // 访问令牌[visit_oauth][access_token]
                
                $this->session->token = $info['visit_oauth']['access_token'];
                $this->data['user_info']['yb_userid'] = $info['visit_user']['userid'];
                $this->data['user_info']['yb_username'] = $info['visit_user']['username'];
            }
            catch (YBException $ex) {
                echo $ex->getMessage();
            }
        }
        if(!isset($this->data['user_info'])){
            $this->user = $this->yiban->getUser($this->session->token);
            $this->data['user_info'] = $this->user->me()['info'];
        }
    }

    function index(){
        $this->data['title'] = 'demo';
        $this->smarty->view('welcome_message', $this->data);
    }

    function logout(){
        $this->session->sess_destroy();
        redirect();//回到首页
    }
}
