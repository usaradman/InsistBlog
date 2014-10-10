<?
	@session_start();
	header('Content-Type: text/html; charset=utf-8');
	require(dirname(__FILE__).'/../../config/init.inc.php');
	$tpl->assign("pagetitle","InsistBlog");
	
	
	//用户是否登录
	if(isset($_COOKIE["login"])){
		$tpl->assign("user_name",$_COOKIE["user_name"]);
		$tpl->assign("user_profession",$_COOKIE["user_profession"]);
		$tpl->assign("user_email",$_COOKIE["user_email"]);
	}
	else{
		$tpl->assign("user_name","程序员");
		$tpl->assign("user_profession","程序员");
		$tpl->assign("user_email","123456@qq.com");
	}
	global $article_num;
		$article_num = 0;
	//获得所有文章
	function getArticles(){
		global $db, $tpl;
		if(isset($_REQUEST["user"])){
			$user = $_REQUEST["user"];
			$sql = "SELECT * FROM ".TB_PREFIX."article WHERE article_author='".$user."' ORDER BY article_createdate DESC limit 10";
			$tpl->assign("whichpage",$_REQUEST["user"]);
			$result = $db->query($sql);
			//print_r($result);
			if($result!=null){
				echo "user in";
				$tpl->assign("articlearray",$result);
				$tpl->assign("totalrecord",count($result));
			}else{
				$tpl->assign("articlearray",array());
				$tpl->assign("totalrecord",0);
			}
		}
		else if(isset($_REQUEST["category"])){
			
			$sql = "SELECT * FROM ".TB_PREFIX."article WHERE article_category='".$_REQUEST['category']."' ORDER BY article_createdate DESC limit 10";
			$tpl->assign("whichpage",$_REQUEST["category"]);
			$result = $db->query($sql);
			//print_r($result);
			if($result!=null){
				echo "category in";
				$tpl->assign("articlearray",$result);
				$tpl->assign("totalrecord",count($result));
			}else{
				$tpl->assign("articlearray",array());
				$tpl->assign("totalrecord",0);
			}
		}
		
	}
	
	
	
	function getNewArticles(){
		global $db, $tpl;
		$sql = "SELECT * FROM ".TB_PREFIX."article ORDER BY article_createdate DESC limit 10";
		$result = $db->query($sql);
		if($result!=null){
			$tpl->assign("newarticles",$result);
		}else{
			$tpl->assign("newarticles",array());
		}
	}
	function getCategory(){
		global $db, $tpl;
		$sql = "SELECT * FROM ".TB_PREFIX."category limit 5";
		$result = $db->query($sql);
		if($result!=null){
			$tpl->assign("categorys",$result);
		}else{
			$tpl->assign("categorys",array());
		}
	}
	function getNewUsers(){
		global $db, $tpl;
		$sql = "SELECT * FROM user ORDER BY user_createdate DESC limit 10";
		$result = $db->query($sql);
		if($result!=null){
			$tpl->assign("users",$result);
		}else{
			$tpl->assign("users",array());
		}
	}

	
	getArticles();	
	getNewArticles();
	getCategory();
	getNewUsers();
	$tpl->display(HOMETEMPLATEPATH.'/morearticle.html');