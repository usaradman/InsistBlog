<?
		require(dirname(__FILE__).'./config.php');
		require(dirname(__FILE__).'/../system/functions.php');
		require(dirname(__FILE__).'/../system/database.php');
		require(dirname(__FILE__).'/../system/userencryption.php');
		require(SMARTYPATH);	//包含Smarty
		$tpl;
		$tpl = new Smarty;
		$tpl->template_dir = HOMETEMPLATEPATH;
		$tpl->compile_dir = TPLCOMPATH;
		$tpl->left_delimiter = "<{";
		$tpl->right_delimiter = "}>";
		$tpl->caching = false;
		
		$tpl->assign("UPLOADPATH",UPLOADPATH);
		$tpl->assign("PUBLICPATH",PUBLICPATH);
		$tpl->assign("TEMPLATECURPATH", TEMPLATECURPATH);
		
		//Http参数转义
		$_REQUEST = cleanArrayForMysql($_REQUEST);
		$_GET = cleanArrayForMysql($_GET);
		$_POST = cleanArrayForMysql($_POST);