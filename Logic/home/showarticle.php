<?

	header('Content-Type: text/html; charset=utf-8');
	require(dirname(__FILE__).'/../../config/init.inc.php');
	
	$tpl->assign("TEMPLATECURPATH", TEMPLATECURPATH);
	
	
	
	
	
	
	//���²鿴����
	function updateReadNum($id, $num, $createdate){
		global $db;
		$num++;
		$sql="UPDATE ".TB_PREFIX."article SET article_readnum='$num',article_createdate='$createdate' WHERE article_id='$id'";
		if(!$db->query($sql)){
			echo 'set parent error!';
		}
	}
	
	//�������۴���
	function updateCommentNum($id, $num, $createdate){
		global $db;
		$num++;
		$sql="UPDATE ".TB_PREFIX."article SET article_cmtnum='$num',article_createdate='$createdate' WHERE article_id='$id'";
		if(!$db->query($sql)){
			echo 'set parent error!';
		}
	}
	
	//��ȡ��������
	function getArticle(){
		global $db, $tpl;
		if(isset($_REQUEST['article_id'])){
				$sql='select * from '.TB_PREFIX.'article where article_id='.$_REQUEST['article_id'];
				$result = $db->query($sql);
				if($result!=null){
					$tpl->assign("title", $result[0][1]);
					$tpl->assign("author", $result[0][2]);
					$tpl->assign("content", $result[0][3]);
					$tpl->assign("originpic", $result[0][4]);
					$tpl->assign("readtime", $result[0][8]);
					$tpl->assign("createdate", $result[0][7]);
					updateReadNum($_REQUEST['article_id'],$result[0][8], $result[0][7]);	
					
				}else{
					$tpl->assign("author", "admin");
					$tpl->assign("title", "title");
					$tpl->assign("content", "content");
					$tpl->assign("readtime", "0");
					$tpl->assign("createdate", "2014-9-28");
				}
				$tpl->assign("article_id", $_REQUEST['article_id']);
		}else{
			
		}
	}
	getArticle();	//����ִ��
	
	//��ȡ�����б�
	function getComments(){
		global $db, $tpl;
		$sql = "SELECT * FROM ".TB_PREFIX."comment WHERE comment_articleid='".$_REQUEST['article_id']."' ORDER BY comment_createdate DESC limit 20";
		$result = $db->query($sql);
		if($result!=null){
			$tpl->assign("comments",$result);
		}else{
			$tpl->assign("comments",array());
		}
	}
	
	//��������ۣ����д���
	if(isset($_REQUEST['comment_content'])){
		if($_REQUEST['comment_content']!=""){	//���۲�Ϊ��
			//$title_ = HtmlEncode($title);
			global $db;
			$articleid = $_REQUEST['article_id'];
			$content = HtmlEncode($_REQUEST['comment_content']);
			$sql = "INSERT INTO ".TB_PREFIX."comment (comment_articleid,comment_content,comment_checked) VALUES 
					('$articleid','$content','1')";
			if(!$db->query($sql)){
				echo "�������۳���";
			}else{
				//�����������۴����Լ������б�
				$sql='select * from '.TB_PREFIX.'article where article_id='.$_REQUEST['article_id'];
				$result = $db->query($sql);
				if($result!=null){
					updateCommentNum($_REQUEST['article_id'],$result[0][9], $result[0][7]);
					$u='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
					$url = dirname($u).'/showarticle.php?article_id='.$_REQUEST['article_id'];
					redirect($url,0,"");	//ˢ��
				}
			}
		}
	}
	
	//��ȡ���µ�10ƪ����
	function getNewArticles(){
		global $db, $tpl;
		$sql = "SELECT * FROM ".TB_PREFIX."article ORDER BY article_createdate DESC limit 10";
		$result = $db->query($sql);
		if($result!=null){
			$tpl->assign("newarticles",$result);
		}
	}
	//��ȡ���·���
	function getCategory(){
		global $db, $tpl;
		$sql = "SELECT * FROM ".TB_PREFIX."category limit 5";
		$result = $db->query($sql);
		if($result!=null){
			$tpl->assign("categorys",$result);
		}
	}
	//��ȡ����ע��Ļ�Ա
	function getNewUsers(){
		global $db, $tpl;
		$sql = "SELECT * FROM user ORDER BY user_createdate DESC limit 10";
		$result = $db->query($sql);
		if($result!=null){
			$tpl->assign("users",$result);
		}
	}
	
	
	getComments();
	getNewArticles();
	getCategory();
	getNewUsers();

	$tpl->display(HOMETEMPLATEPATH.'/showarticle.html');