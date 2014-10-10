<?
//安全检测
function get_str($string)
{
	if (!get_magic_quotes_gpc()) {
		return addslashes($string);
	}
	return $string;
}

function HtmlEncode(&$str)
{			/*
			 str_replace("&", "&amp;",$str);
             str_replace("<", "&lt;",$str);
             str_replace(">", "&gt",$str);
             str_replace("'", "''",$str);
             str_replace("*", "",$str);
             str_replace("\n", "<br/>",$str);
             str_replace("\r\n", "<br/>",$str);
             str_replace("select", "",$str);
             str_replace("insert", "",$str);
             str_replace("update", "",$str);
             str_replace("delete", "",$str);
             str_replace("create", "",$str);
             str_replace("drop", "",$str);
             str_replace("delcare", "",$str);
			 */
			 //$str = str_replace("&", "。。",$str);
             $str = str_replace("<", "。。",$str);
             $str = str_replace(">", "。。",$str);
             $str = str_replace("'", "\'",$str);
             $str = str_replace("*", "",$str);
             $str = str_replace("\n", "<br/>",$str);
             $str = str_replace("\r\n", "<br/>",$str);
             $str = str_replace("select", "",$str);
             $str = str_replace("insert", "",$str);
             $str = str_replace("update", "",$str);
             $str = str_replace("delete", "",$str);
             $str = str_replace("create", "",$str);
             $str = str_replace("drop", "",$str);
             $str = str_replace("delcare", "",$str);
			 return $str;
}

function cleanArrayForMysql($data)
{
	if(!get_magic_quotes_gpc())
		return (is_array($data))?array_map('cleanArrayForMysql', $data):mysql_real_escape_string($data);
	else
		return $data;
}
function checkSqlStr($string)
{
	$string = strtolower($string);
	if(substr_count($string,'%20union')>0 || substr_count($string,'%20select')>0 || substr_count($string,'%20and')>0 || substr_count($string,'%20where')>0 || substr_count($string,'%20update')>0 || substr_count($string,'%20delete')>0 || substr_count($string,'%20when')>0 || substr_count($string,'%20from')>0 || substr_count($string,'%20version')>0 || substr_count($string,'%20ascii')>0 || substr_count($string,'%20substring')>0)
	return true;
	else
	return false;
}


// URL重定向
function redirect($url, $time=0, $msg='') {
    //多行URL地址支持
    $url = str_replace(array("\n", "\r"), '', $url);
    if (empty($msg))
        $msg = "<center><p>系统将在{$time}秒之后自动跳转到{$url}！</p></center>";
    if (!headers_sent()) {
        // redirect
        if (0 === $time) {
            header('Location: ' . $url);
        } else {
            header("refresh:{$time};url={$url}");
            echo('<center><p>'.$msg.'</center></p>');
        }
        exit();
    } else {
        $str = "<meta http-equiv='Refresh' content='{$time};URL={$url}'>";
        if ($time != 0)
            $str .= $msg;
        exit($str);
    }
}


?>