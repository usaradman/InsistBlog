<?php /* Smarty version Smarty-3.1.18, created on 2014-10-05 02:40:37
         compiled from "E:\PHP\PHPnow-1.5.6\htdocs\InsistBlog\template\home\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:12422542c47df431f58-49236966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e11f71e98a3da5ea89c7b0fe5a6d00cd0e323382' => 
    array (
      0 => 'E:\\PHP\\PHPnow-1.5.6\\htdocs\\InsistBlog\\template\\home\\edit.html',
      1 => 1412476819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12422542c47df431f58-49236966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_542c47df693411_35773067',
  'variables' => 
  array (
    'user_name' => 0,
    'categorys' => 0,
    'value' => 0,
    'ROOTPATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c47df693411_35773067')) {function content_542c47df693411_35773067($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./../header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--header end-->
<div id="mainbody">
  <div class="blogs">
    <div id="index_view">
      <h2 class="t_nav"><a href="#">网站首页</a><a href="/">慢生活</a></h2>
      <ul>	
			<!--content-->
			<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" method="post" action="?act=add" enctype="multipart/form-data">
  <tr>
    <td width="892"><a href="javascript:history.back(1)">&nbsp;返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="57">标题</td>
          <td width="861"><input type="text" class="txt" name="article_title" id="title" style="width:96%"> </td>
        </tr>
		<tr>
          <td width="57">作者</td>
          <td><input type="text" name="article_author" class="txt" id="title" style="width:96%" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
" readonly="true"></td>
		</tr>
		<tr>
          <td width="57">关键字</td>
          <!--<td><input type="text" name="article_category" class="txt" id="tags" style="width:96%"></td>-->
		   <td><select name="article_category">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categorys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
</option>
			<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
				<option value="default">default</option>
			<?php } ?>
		  </select></td>
		</tr>
		<tr>
          <td width="57">上传图片</td>
          <td><input type="file" name="article_originpic" class="txt" id="tags" style="width:96%"></td>
		</tr>
   	
	<tr>
	  <td colspan="2" valign="top">
	  <textarea id="content" name="article_content" rows="4" cols="40" style="width: 100%; height: 400px"></textarea></td>
	  <script charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['ROOTPATH']->value;?>
/keditor/kindeditor-min.js"></script>
		<script>
			KE.show({
                id : "content",
				allowFileManager : true
				
			});
		</script>
	</tr>
	<tr>
	  <td width="100" style="padding:10px;">点击次数</td>
	  <td width="175" style="padding:10px;"><input type="text" name="article_readnum" class="txt" id="counts" value="0" style="width:50%">次</td>
	</tr>
	<tr><td colspan="2"></td></tr>
	</table>	
	</td>
	</tr></form>
	</table>

			<!--End edit-->
	  </ul>
      <div class="share"> 
        <!-- Baidu Button BEGIN -->
        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <span class="bds_more">分享到：</span> <a class="bds_qzone"></a> <a class="bds_tsina"></a> <a class="bds_tqq"></a> <a class="bds_renren"></a> <a class="bds_t163"></a> <a class="shareCount"></a> </div>
        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
        <script type="text/javascript" id="bdshell_js"></script> 
        <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
        <!-- Baidu Button END --> 
      </div>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
          <li><a href="" title="我希望我的爱情是这样的">我希望我的爱情是这样的有种情谊，不是爱情，也算不得友情有种情谊，不是爱情，也算不得友情</a></li>
          <li><a href="" title="有种情谊，不是爱情，也算不得友情">有种情谊，不是爱情，也算不得友情有种情谊，不是爱情，也算不得友情有种情谊，不是爱情，也算不得友情</a></li>
          <li><a href="" title="世上最美好的爱情">世上最美好的爱情</a></li>
          <li><a href="" title="爱情没有永远，地老天荒也走不完">爱情没有永远，地老天荒也走不完</a></li>
          <li><a href="" title="爱情的背叛者">爱情的背叛者</a></li>
        </ul>
      </div>
    </div>
    <!--bloglist end-->
    <aside>
      <div class="search">
        <form class="searchform" method="get" action="">
          <input type="text" name="s" value="Search" onfocus="this.value=''" onblur="this.value='Search'">
        </form>
      </div>
      <div class="sunnav">
        <ul>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categorys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<li><a href="morearticle.php?category=<?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
" target="" title="<?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
</a></li>
			<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>	
				<li><a href="" target="_blank" title=""></a></li>
				<li><a href="" target="_blank" title=""></a></li>
				<li><a href="" target="_blank" title=""></a></li>
				<li><a href="" target="_blank" title=""></a></li>
			<?php } ?>
			<li><a href="#" title="新建分类">新建分类</a></li>
        </ul>
      </div>
    </aside>
  </div>
  <!--blogs end--> 
</div>
<!--mainbody end-->
<?php echo $_smarty_tpl->getSubTemplate ("./../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
