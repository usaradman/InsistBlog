<?
	@session_start();
	header('Content-Type: text/html; charset=utf-8');
	require(dirname(__FILE__).'/../../config/init.inc.php');
	
	global $tpl;
	if(!isset($_COOKIE["user_name"])){
		//未登录
		$u='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
				$url = dirname($u).'/login.php';
				redirect($url,1,"请先登录");	//刷新
	}
	else{
		$tpl->assign("user_name",$_COOKIE["user_name"]);
		$tpl->assign("user_profession",$_COOKIE["user_profession"]);
		$tpl->assign("user_email",$_COOKIE["user_email"]);
	}
	
	//处理表单提交数据
	if(isset($_REQUEST['act'])){
			global $db;
			global $title,$author,$content,$originpic,$smallpic,$category,$readnum,$cmtnum;
			$title="";$author="admin"; $content="";$originpic=""; $smallpic=""; $category=""; $readnum=0; $cmtnum=0; 
			if($_REQUEST["article_title"]==""){
				echo "<center>题目不能为空</center>";	
				$title="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			}else{
				$title=$_REQUEST["article_title"];
			}
			$author=$_REQUEST["article_author"];
			$content=$_REQUEST["article_content"];
			$category=$_REQUEST["article_category"];
			if($_REQUEST["article_readnum"]!=""){
				$readnum = $_REQUEST["article_readnum"];	//阅读次数
			}
		if($_REQUEST['act']=="add"){
			//上传图片处理
			if($_FILES["article_originpic"]["error"] > 0 || ($_FILES["article_originpic"]["type"]!="image/jpeg" 
						&& $_FILES["article_originpic"]["type"]!="image/png")){
				//先将上传图片移动到uploads
				$originpic = "s1.jpg";
				$smallpic = "s1.jpg";
			}
			else{			
				move_uploaded_file($_FILES["article_originpic"]["tmp_name"],
									"../../uploads/images/".date("Ymdhisa").$_FILES["article_originpic"]["name"]);
				$originpic = date("Ymdhisa").$_FILES["article_originpic"]["name"];
				$smallpic = date("Ymdhisa").$_FILES["article_originpic"]["name"];
			}	
			$title_ = HtmlEncode($title); $author = HtmlEncode($author); //$content = HtmlEncode($content);
			$originpic = HtmlEncode($originpic); $smallpic = HtmlEncode($smallpic); $category = HtmlEncode($category);
			$readnum = HtmlEncode($readnum); $cmtnum = HtmlEncode($cmtnum);
			//将数据插入数据库中
			$sql = "INSERT INTO ".TB_PREFIX."article (article_title,article_author,
					article_content,article_originpic,article_smallpic, article_category, article_readnum) VALUES 
					('$title_','$author','$content',
					'$originpic','$smallpic','$category','$readnum')";
			if(!$db->query($sql)){
				echo '数据库添加文章错误';
			}else{
				$u='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
				$url = dirname($u).'/index.php';
				redirect($url,0,"添加成功");	//刷新
			}
		}else if($_REQUEST['act']=="edit"){
			//编辑
		}
		
	}else{
	
	}
	function getCategories(){
		//显示分类
		global $db, $tpl;
		$sql = "SELECT * FROM ".TB_PREFIX."category";
		$categorys = $db->query($sql);
		if($categorys!=null){
			$tpl->assign("categorys",$categorys);
		}else{
			$tpl->assign("categorys",array());
		}
	}
	
	/*<?php ewebeditor(EDITORSTYLE,'content',null); ?>*/
	$tpl->assign("ROOTPATH",ROOTPATH);
	getCategories();
	$tpl->assign("pagetitle","小狼BABY|编辑");
	$tpl->display(HOMETEMPLATEPATH.'/edit.html');
	
?>