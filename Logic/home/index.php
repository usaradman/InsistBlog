<?
	@session_start();
	header('Content-Type: text/html; charset=utf-8');
	require(dirname(__FILE__).'/../../config/init.inc.php');
	$tpl->assign("pagetitle","InsistBlog");
	$tpl->assign("ImageTextTitle","品味淡淡的感觉 淡淡的生活");
	$tpl->assign("ImageTextContent","一个人，就一个人静静地
									将自己融化在袅袅的清香和悠扬的音乐中，翻开旧日的像册，打开尘封的回忆
									回忆着从来不需要想起，永远也不会忘记的你
									这“淡淡”之中又引出多少的感慨万分，多少的幽怨无奈
									淡淡的，总是那么让人难忘……");
	
	global $tpl;
	//用户是否登录
	if(isset($_COOKIE["login"])){
		$tpl->assign("user_name",$_COOKIE["user_name"]);
		$tpl->assign("user_profession",$_COOKIE["user_profession"]);
		$tpl->assign("user_email",$_COOKIE["user_email"]);
		$tpl->assign("islogin","true");
	}
	else{
		$tpl->assign("islogin","false");
		$tpl->assign("user_name","user");
		$tpl->assign("user_profession","程序员");
		$tpl->assign("user_email","123456@qq.com");
	}
	//获得所有文章
	function getArticles(){
		global $db, $tpl;
		$sql = "SELECT * FROM ".TB_PREFIX."article ORDER BY article_createdate DESC limit 5";
		$result = $db->query($sql);
		if($result!=null){
			$tpl->assign("articlearray",$result);
		}
	}
	function getNewArticles(){
		global $db, $tpl;
		$sql = "SELECT * FROM ".TB_PREFIX."article ORDER BY article_createdate DESC limit 10";
		$result = $db->query($sql);
		if($result!=null){
			$tpl->assign("newarticles",$result);
		}
	}
	function getCategory(){
		global $db, $tpl;
		$sql = "SELECT * FROM ".TB_PREFIX."category limit 5";
		$result = $db->query($sql);
		if($result!=null){
			$tpl->assign("categorys",$result);
		}
	}
	function getNewUsers(){
		global $db, $tpl;
		$sql = "SELECT * FROM user ORDER BY user_createdate DESC limit 10";
		$result = $db->query($sql);
		if($result!=null){
			$tpl->assign("users",$result);
		}
	}

	
	getArticles();	
	getNewArticles();
	getCategory();
	getNewUsers();
	$tpl->display(HOMETEMPLATEPATH.'/index.html');
	
	
	
	