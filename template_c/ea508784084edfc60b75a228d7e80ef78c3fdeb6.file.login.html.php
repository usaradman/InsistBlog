<?php /* Smarty version Smarty-3.1.18, created on 2014-10-06 15:29:37
         compiled from "E:\PHP\PHPnow-1.5.6\htdocs\InsistBlog\template\home\login.html" */ ?>
<?php /*%%SmartyHeaderCode:11376542fac46d07e61-51109785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea508784084edfc60b75a228d7e80ef78c3fdeb6' => 
    array (
      0 => 'E:\\PHP\\PHPnow-1.5.6\\htdocs\\InsistBlog\\template\\home\\login.html',
      1 => 1412609373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11376542fac46d07e61-51109785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_542fac46d659f6_72999234',
  'variables' => 
  array (
    'PUBLICPATH' => 0,
    'errorMsg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542fac46d659f6_72999234')) {function content_542fac46d659f6_72999234($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台登录</title>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
css/login_reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
css/login_style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
css/login_invalid.css" type="text/css" media="screen" />

<script>
			function show(obj){
				
			}
</script>
</head>

<body id="login">

<div id="login-wrapper" class="png_bg">

  	<div id="login-top">
    	<h1>Usar Adman</h1>
    	<!-- Logo (221px width) -->
    	<img id="logo" src="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
images/admin/logo.png" alt="logo" />
    </div>
    
   	<!-- Form表单 --> 
  	<div id="login-content"> 
    	<form id="form1" name="form1" method="post" action="?act=login">
      		
      		<p>
        		<label>用户名</label>
        		<input class="text-input" type="text"  name="username"/>
      		</p>
      		
      		<div class="clear"></div>
      		
      		<p>
        		<label>密码</label>
        		<input class="text-input" type="password" name="pwd"/>
      		</p>
      		
      		<div class="clear"></div>
      		
      		<p>
        		<label>验证码</label>
        		<input class="text-input" type="text" name="checkcode"/>
      		</p>
            <div class="clear"></div>
      		<img src="verifycode.php" alt="看不清？点击更换" onClick="this.src=this.src+'?'"  style="margin-left:90px;"/>
            <p id="remember-password"><input type="checkbox" name="remember" />记住我</p>
      
      		 <div class="clear"></div> <div class="clear"></div>

             <p style="margin-top:10px; margin-left:90px;"><?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>
</p>
             
      		<div class="clear"></div>
      		<p>
        		<input class="button" name="login" type="submit" value="登录" />
      		</p>
    	</form>
  </div>

</div>	
</body>
</html><?php }} ?>
