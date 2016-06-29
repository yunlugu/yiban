<?php
/* Smarty version 3.1.29, created on 2016-06-29 12:58:51
  from "E:\wamp64\www\yiban_base\application\views\demo\welcome_message.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5773c60bcc20a7_55810878',
  'file_dependency' => 
  array (
    '15d1377c881c81f91e1b527cb14fafc60d6d8660' => 
    array (
      0 => 'E:\\wamp64\\www\\yiban_base\\application\\views\\demo\\welcome_message.php',
      1 => 1467204966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5773c60bcc20a7_55810878 ($_smarty_tpl) {
?>


<div id="container">
	<h1>中南大学易班应用管理</h1>

	<div id="body">
		<p>中南大学易班应用管理</p>

		<p>整合smarty、phpqrcode、易班sdk，源码位于third_party/下</p>

		<p>易班sdk封装application/library/YibanSDK.php，目前仅实现授权相关的几种方法</p>
		<code>$config = array('appID' => '',
                        'appSecret' => '',
                        'callback' => "");
        	  $this->load->library('YibanSDK', $config, 'yiban');</code>

        <p>在视图中使用smarty需要在控制器中加载Use_smarty库，并使用$this->smarty->main_view()或$this->smarty->view()方法代替load->view()方法，参见demo控制器</p>

		<p>更多内容，请参见<a href="http://codeigniter.org.cn/user_guide/">ci文档</a>和<a href="https://open.yiban.cn/wiki/index.php?page=%E5%B9%B3%E5%8F%B0%E4%BB%8B%E7%BB%8D">易班open wiki。</a></p>
	</div>

</div>


<?php }
}
