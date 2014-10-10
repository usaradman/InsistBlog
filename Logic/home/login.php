<?php
	@session_start();
	header('Content-Type: text/html; charset=utf-8');
	require(dirname(__FILE__).'/../../config/init.inc.php');
	
	global $errorMsg;
	
/**
 *密码验证
 */
function checkPwd($username,$pwd,$flag=false)
{
	global $db;
	$username = $username;
	$username=get_str($username);
	if(!checkSqlStr($username))
		$sql="select * from user where user_name='$username' limit 1";	//".TB_PREFIX."
	else{
		echo '非法字符'; return;
	}
	$result = $db->query($sql);
	
	if($result!=null)
	{
		$shlencryption = new userEncryption($pwd); //39a3q4y7eda39a3ee5sybfef95601l
		if ($result[0][1]==$shlencryption->to_string() || $result[0][1]==sha1($pwd)) {
		//if ($result[0][1]==$pwd) {
			$_SESSION['user_name']=$result[0][0];
			$_SESSION['login'] = 'success';
			//if($flag)
			//{
				$cookieTime =86400;
				setcookie('user_name',$result[0][0],time()+$cookieTime);
				setcookie('user_profession',$result[0][2],time()+$cookieTime);
				setcookie('user_email',$result[0][3],time()+$cookieTime);
				setcookie('login','success',time()+$cookieTime);
			//}

			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}
/**
 * 对验证码进行验证
 */
function checkCode($checkcode)
{
	$verifycode=$_SESSION['verifycode'];
	if ($verifycode != $checkcode)
	{
		return false;
	}
	else
	{
		return true;
	}
}
if(isset($_REQUEST['emsg'])){
	if($_REQUEST['emsg']==1)
	{
		$shlencryption = new userEncryption($_REQUEST['pwd']);
		$errorMsg='<font color="#FFFFFF">您的用户名与密码不符,请再试一次</font>';	
	}else
	if($_REQUEST['emsg']==2)
	{
		$errorMsg='<font color="#FF0000">您的验证码有误,请再试一次.</font>';
	}else
	if($_REQUEST['emsg']==3)
	{
		$errorMsg='<font color="#FFFFFF">请输入用户名.</font>';
	}else{
		$errorMsg='<font color="#FFFFFF">未知错误.</font>';
	}
}
if(isset($_GET['act'])){
	if($_GET['act']=='login')
	{
		if($_REQUEST['username']==''){
			redirect('login.php?username='.$_REQUEST['username'].'&emsg=3');
		}
		if(checkPwd($_REQUEST['username'],$_REQUEST['pwd'],$_REQUEST['remember']))
		{
			if(!checkCode($_REQUEST['checkcode']))
			{
				redirect('login.php?username='.$_REQUEST['username'].'&emsg=2');
			}
			else
			{	
				//登录成功
				$u='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
				$url = dirname($u).'/index.php';
				redirect($url,0,'');
			}
		
		}
		else
		{
			redirect('login.php?username='.$_REQUEST['username'].'&emsg=1');
		}
	}
	if($_GET['act']=='logout')
	{
		@session_start();
		@session_destroy();
		setcookie('user_name','',time()-3600);
		setcookie('user_pwd','',time()-3600);
		setcookie('login','',time()-3600);
		setcookie(session_name(),'',time()-3600);
   		$_SESSION = array();
	}
}
	$tpl->assign("errorMsg",$errorMsg);
	$tpl->display(HOMETEMPLATEPATH.'/login.html');

?>
