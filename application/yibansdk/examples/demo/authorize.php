<?php
	/**
	 * 真真真Auth真真真真
	 * 真真真真真真真真真真真真�code真
	 * 真真真真真真真真真真真�
	 *
	 */


	/**
	 * 真SDK
	 */
	require("../../classes/yb-globals.inc.php");
	
	session_start();

	/**
	 * 真真
	 */
	include('config.php');
	
	/**
	 * 真真真AppID�AppSecret真真�
	 *
	 */
	$api = YBOpenApi::getInstance()->init($cfg['m']['appID'], $cfg['m']['appSecret'], $cfg['m']['callback']);
	//var_dump($cfg);
	//exit;
	$au  = $api->getAuthorize();
	
	/**
	 * 真真真session真真真真真�
	 */
	$token	= isset($_SESSION['__TOKEN__']) ? $_SESSION['__TOKEN__'] : false;

	if (empty($token))		// 真真�
	{
		/**
		 * 真真真真真真URL真�code真真真�
		 *
		 */
		if (isset($_GET['code']) && !empty($_GET['code']))
		{
			/**
			 * 真真真code真真真�
			 * 真真�session真$info['access_token']
			 * 真真msgCN 真真
			 */
			$info = $au->querytoken($_GET['code']);
			if (isset($info['access_token']))
			{
				$_SESSION['__TOKEN__']	= $info['access_token'];
				echo 'SUCCESS';
			}
			else
			{
				echo $info['msgCN'];
			}
			var_dump($_SESSION);
		}
		else	// 真真真真�
		{
			header('location: ' . $au->forwardurl());
		}
	}
	else
	{
		echo 'AUTHORIED';
		session_destroy();
	}
?>
