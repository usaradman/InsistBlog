<?php
	@session_start();
	header('Content-Type: text/html; charset=utf-8');
	require(dirname(__FILE__).'/../../config/init.inc.php');
	
	global $errorMsg;
	


if(isset($_REQUEST['emsg'])){
	if($_REQUEST['emsg']==1)
	{
		$errorMsg='<font color="#FFFFFF">该用户名已存在</font>';
	}
}
if(isset($_GET['act'])){
	global $db;
	$name = HtmlEncode($_REQUEST['username']); $profession = HtmlEncode($_REQUEST['profession']);
	$pwd = HtmlEncode($_REQUEST['pwd']); $email = HtmlEncode($_REQUEST['email']);
	if(strstr($name,"。")||strstr($profession,"。")||strstr($pwd,"。")||strstr($email,"。")){
				//含有非法字符
				$u='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
				$url = dirname($u).'/signup.php';
	}
	$shlencryption = new userEncryption($pwd);
	$fpwd = $shlencryption->to_string();
	$sql = "INSERT INTO user (user_name, user_pwd, user_profession, user_email) VALUES 
					('$name','$fpwd','$profession','$email')";
	if(!$db->query($sql)){
			redirect('signup.php?&emsg=1');
	}else{
		//设置COOKIE
		$cookieTime =86400;
		setcookie('user_name',$name,time()+$cookieTime);
		setcookie('user_profession',$profession,time()+$cookieTime);
		setcookie('user_email',$email,time()+$cookieTime);
		setcookie('login','success',time()+$cookieTime);
		
		//注册成功
		$u='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
		$url = dirname($u).'/index.php';
		redirect($url,0,'');
	}

}
	$tpl->assign("errorMsg",$errorMsg);
	$tpl->display(HOMETEMPLATEPATH.'/signup.html');

?>
