<?php
	/**
	 * ¿¿¿¿¿¿Auth¿¿¿¿¿¿¿¿
	 * ¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿code¿¿
	 * ¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿
	 *
	 */


	/**
	 * ¿¿SDK
	 */
	require("../../classes/yb-globals.inc.php");
	
	session_start();

	/**
	 * ¿¿¿¿
	 */
	include('config.php');
	
	/**
	 * ¿¿¿¿¿¿AppID¿AppSecret¿¿¿¿¿
	 *
	 */
	$api = YBOpenApi::getInstance()->init($cfg['m']['appID'], $cfg['m']['appSecret'], $cfg['m']['callback']);
	//var_dump($cfg);
	//exit;
	$au  = $api->getAuthorize();
	
	/**
	 * ¿¿¿¿¿¿session¿¿¿¿¿¿¿¿¿¿¿
	 */
	$token	= isset($_SESSION['__TOKEN__']) ? $_SESSION['__TOKEN__'] : false;

	if (empty($token))		// ¿¿¿¿¿
	{
		/**
		 * ¿¿¿¿¿¿¿¿¿¿¿¿URL¿¿¿code¿¿¿¿¿¿¿
		 *
		 */
		if (isset($_GET['code']) && !empty($_GET['code']))
		{
			/**
			 * ¿¿¿¿¿¿code¿¿¿¿¿¿¿
			 * ¿¿¿¿¿session¿¿$info['access_token']
			 * ¿¿¿¿msgCN ¿¿¿¿
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
		else	// ¿¿¿¿¿¿¿¿¿
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
