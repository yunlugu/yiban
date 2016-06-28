

<div id="container">
	<h1>中南大学易班应用管理</h1>

	<div id="body">
		<p>中南大学易班应用管理</p>

		<p>整合smarty、phpqrcode、易班sdk</p>
		<code>源码位于third_party/下</code>

		<p>易班sdk封装application/library/YibanSDK.php，目前仅实现授权相关的几种方法</p>
		<code>$config = array('appID' => '',
                        'appSecret' => '',
                        'callback' => "");
        	  $this->load->library('YibanSDK', $config, 'yiban');</code>

		<p>该视图位于如下路径：</p>
		<code>application/views/welcome_message.php</code>

		<p>CI文档在此： <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer"><?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>


