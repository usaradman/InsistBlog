<?
//数据库配置字段
define('DB_HOSTNAME','localhost');
define('DB_USER','root');
define('DB_PASSWORD','000000');
define('DB_DBNAME','insistblog');
define('TB_PREFIX','usar_');
//WebSite Description
define('SITENAME','InsistBlog');
define('SITESUMMARY','InsistBlog');
define('WEB_DESCRIBE',"InsistBlog");
define('WEB_KEYWORDS',"Blog, Simple Blog");
define('VERSION','1.0.0');
//模板配置字段
define('ABSPATH',dirname(__FILE__).'/../');	
define('ROOTPATH','/insistblog');
define('SMARTYPATH',ABSPATH.'libs/Smarty.class.php');
define('HOMETEMPLATEPATH',ABSPATH.'template/home');		//home模板目录
define('ADMINTEMPLATEPATH',ABSPATH.'template/admin');		//admin模板目录
define('TPLCOMPATH',ABSPATH.'template_c/');		//模板编译目录

define('UPLOADPATH',ROOTPATH.'/uploads/');
define('SYSTEMPATH',ROOTPATH.'/system/');
define('PUBLICPATH',ROOTPATH.'/public/');

define('TEMPLATECURPATH',ROOTPATH.'/template/home');				//模板间的相对路径
function get_current_url(){
	return "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
}
function get_root_path(){
	return ROOTPATH;
}
function get_absroot_path(){
	return ABSPATH;
}
?>