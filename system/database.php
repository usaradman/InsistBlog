<?php

class usar_database{


	//mysql_connect(servername,username,password);
	function usar_database($servername,$username,$password,$dbname){
		$this->db = @mysql_connect($servername,$username,$password);
		if(!$this->db){
				$this->bail("
			<h1>建立数据库链接时出错！</h1>
			<p>也可能是存在于<code>config.php</code>文件中的数据库用户名或密码不正确，不能建立与数据库服务器<code>$db</code>的连接. </p>
			<ul>
				<li>你确定你的数据库用户名密码没错？</li>
				<li>你确定你输入了正确的主机名？</li>
				<li>你确定你的数据库服务器正在运行？</li>
			</ul>
			<p>如果你不确定这些信息请联系你的虚拟主机服务供应商. 如果不能解决请登陆 <a href='#'>	usar</a>.</p>");
		}
		$this->select($dbname);
		$this->query("SET NAMES 'utf8' ");
		
	}

	function select($dbname) {
			if (!@mysql_select_db($dbname, $this->db)) {
				$this->bail("
		<h1>不能选择数据库</h1>
		<p>我们可以正确的连接到数据库 (这说明你的用户名和密码没问题) 但是不能选择(select) <code>$usardb</code> 数据库.</p>
		<ul>
			<li>你确定这个数据库存在?</li>
			<li>一些系统中会将你的用户名作为你数据库的前缀,就像这样 username_deepthroat. 检查一下你是否是这个问题?</li>
		</ul>
		<p>如果你不知道怎样在MYSQL中 设置/安装 一个数据库，那么请<strong>联系你的虚拟主机供应商</strong>.
		如果都不是以上的问题请登陆 <a href='#'>xiaolang</a>.</p>");
			}
		}

	function query($query) {
		
		$this->result = @mysql_query($query, $this->db);
		if ( mysql_error() ) {
			$this->print_error($query);
			echo "database error";
			return false;
		}
		if(stripos($query,"select")===0){
			$usararray = array();
			while($row = @mysql_fetch_row($this->result)){
				$usararray[] = $row;
			}
			@mysql_free_result($this->result);
			@mysql_close($this->result);
			return $usararray;
		}
		@mysql_free_result($this->result);
		@mysql_close($this->result);
		return true;
	}
	
	



	//错误生成
	function bail($message) { // Just wraps errors in a nice header and footer
		if ( !$this->show_errors )
		return false;
		header( 'Content-Type: text/html; charset=utf-8');
		echo <<<HEAD
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
			<title>USAR 错误页面</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<style media="screen" type="text/css">
			<!--
			html {
				background: #eee;
			}
			body {
				background: #fff;
				color: #000;
				font-family: Georgia, "Times New Roman", Times, serif;
				margin-left: 25%;
				margin-right: 25%;
				padding: .2em 2em;
			}
		
			h1 {
				color: #006;
				font-size: 18px;
				font-weight: lighter;
			}
		
			h2 {
				font-size: 16px;
			}
		
			p, li, dt {
				line-height: 140%;
				padding-bottom: 2px;
			}
	
			ul, ol {
				padding: 5px 5px 5px 20px;
			}
			#logo {
				margin-bottom: 2em;
			}
			-->
			</style>
		</head>
		<body>
		<h1 id="logo"><img alt="Deepthorat" src="http://www.deepthroat.com.cn/setup/setup.png" /></h1>
HEAD;
		echo "<div><font color=\"Red\">出现这种错误的原因是可能您还没有安装数据库，请点击<a href='setup/setup.php'>安装</a>您的数据库</font></div>";
		echo $message;
		echo "</body></html>";
		die();
	}
	
	function print_error($querys,$str = '') {
		global $EZSQL_ERROR;
		if (!$str) $str = mysql_error();
		$EZSQL_ERROR[] =
		array ('query' => $str, 'error_str' => $str);

		$str = htmlspecialchars($str, ENT_QUOTES);
		$query = htmlspecialchars($querys, ENT_QUOTES);
		// Is error output turned on or not..

		
		if ( true ) {
			// If there is an error then take note of it
			print "<div id='error'>
			<p class='dtdberror'><strong>数据库错误:</strong> [$str]<br />
			<code>$query</code></p>
			</div>";
		} else {
			return false;
		}
	}
	
	
}

	$db = new usar_database(DB_HOSTNAME,DB_USER,DB_PASSWORD,DB_DBNAME);
	
?>