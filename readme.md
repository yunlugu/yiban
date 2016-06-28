## 中南大学易班应用管理

整合smarty、phpqrcode、易班sdk，源码位于third_party/下

## 易班sdk

封装于application/library/YibanSDK.php，目前仅实现授权相关的几种方法
接入：

        $config = array('appID' => '',
                        'appSecret' => '',
                        'callback' => "");
        $this->load->library('YibanSDK', $config, 'yiban');</code>

## smarty

封装于application/library/Use_smarty.php

接入：

        //传入header.php视图所在目录
        $params = array('app' => 'demo');
        $this->load->library('Use_smarty', $params, 'smarty');
        //调用视图
        $this->smarty->main_view('index', $this->data);

易班授权demo：application/controller/Demo.php
