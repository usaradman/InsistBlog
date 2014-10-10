<?php /* Smarty version Smarty-3.1.18, created on 2014-10-04 18:09:29
         compiled from "E:\PHP\PHPnow-1.5.6\htdocs\InsistBlog\template\home\signup.html" */ ?>
<?php /*%%SmartyHeaderCode:6834543031b99443b2-41284110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3314817a8eda6b63fcd21be03238beed618ac007' => 
    array (
      0 => 'E:\\PHP\\PHPnow-1.5.6\\htdocs\\InsistBlog\\template\\home\\signup.html',
      1 => 1412446166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6834543031b99443b2-41284110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_543031b99d1df7_25054646',
  'variables' => 
  array (
    'PUBLICPATH' => 0,
    'errorMsg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543031b99d1df7_25054646')) {function content_543031b99d1df7_25054646($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>注册</title>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
css/login_reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
css/login_style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
css/login_invalid.css" type="text/css" media="screen" />

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
    	<form id="form1" name="form1" method="post" action="?act=signup">
      		
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
        		<label>邮箱</label>
        		<input class="text-input" type="text" name="email"/>
      		</p>
			<div class="clear"></div>
			<p>
        		<label>职业</label>
        		<input class="text-input" type="text" name="profession"/>
      		</p>
			
      		 <div class="clear"></div> <div class="clear"></div>
			 <p style="margin-top:10px; margin-left:90px;"><?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>
</p>
             
      		<div class="clear"></div>
      		<p>
        		<input class="button" name="login" type="submit" value="注册" />
      		</p>
    	</form>
  </div>

</div>	
</body>
</html><?php }} ?>
