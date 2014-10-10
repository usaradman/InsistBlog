<?php /* Smarty version Smarty-3.1.18, created on 2014-10-04 16:22:41
         compiled from "E:\PHP\PHPnow-1.5.6\htdocs\InsistBlog\template\home\showarticle.html" */ ?>
<?php /*%%SmartyHeaderCode:558454296a2bdaa775-09381083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b29841f5bd06005aacc95c1a6d692932ab2ce90e' => 
    array (
      0 => 'E:\\PHP\\PHPnow-1.5.6\\htdocs\\InsistBlog\\template\\home\\showarticle.html',
      1 => 1412439757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '558454296a2bdaa775-09381083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54296a2c1b3556_59126399',
  'variables' => 
  array (
    'title' => 0,
    'createdate' => 0,
    'author' => 0,
    'readtime' => 0,
    'UPLOADPATH' => 0,
    'originpic' => 0,
    'content' => 0,
    'comments' => 0,
    'row' => 0,
    'PUBLICPATH' => 0,
    'article_id' => 0,
    'newarticles' => 0,
    'i' => 0,
    'categorys' => 0,
    'value' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54296a2c1b3556_59126399')) {function content_54296a2c1b3556_59126399($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./../header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--header end-->
<div id="mainbody">
  <div class="blogs">
    <div id="index_view">
      <h2 class="t_nav"><a href="">Article</a></h2>
      <h1 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
      <p class="box">发布时间：<?php echo $_smarty_tpl->tpl_vars['createdate']->value;?>
<span>编辑：<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</span>阅读（<?php echo $_smarty_tpl->tpl_vars['readtime']->value;?>
）</p>
      <ul>	
		<p><img src="<?php echo $_smarty_tpl->tpl_vars['UPLOADPATH']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['originpic']->value;?>
"></p>
        <p> <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
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
	  
	  <!-- 评论列表 -->
	  <div class="otherlink">
		<h2>最新评论</h2>
		<div class="visitors">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
			<?php if (is_array($_smarty_tpl->tpl_vars['row']->value)) {?>	
				<dl>
					<dt><img src="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
images/icon_comment.png">
					</dt>
					<dd>GUEST
					<time><?php echo $_smarty_tpl->tpl_vars['row']->value[3];?>
</time>
					</dd>
					<dd><?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>
</dd>
				</dl>
			<?php } else { ?>
				Nothing
			<?php }?>
			<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
			  <dl>
				<dt><img src="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
images/icon_comment.png">
				</dt>
				<dd>暂时没有评论</dd>
			  </dl>
			<?php } ?>
			</div>
			<div class="visitors" style="float:left">
				<!--评论 -->
				<table width="100%" border="0" cellpadding="2" cellspacing="1">
					<form name="form1" method="post" action="showarticle.php?article_id=<?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
">
					<tr>
					<td><img src="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
images/icon_comment.png" style="width:67px; height:67px; margin-left:10px; float:left;"></td>
					<td>
					<textarea  style="resize:none;" cols="65" rows="2"  name="comment_content"></textarea>
					</td>
					<!---->
					</tr>
					<tr>
					<td width="72"></td>
					<td width="72"><div align="right"><input name="submit" type="submit" value=" 发表 "  style="margin-right:10px;"/></div></td>
					</tr>
					</form>
				</table>
			</div>
		</div>
		<br/>
	  <!-- End 评论列表-->
    </div>
    <!--bloglist end-->
    <aside>
      <div class="search">
        <form class="searchform" method="get" action="">
          <input type="text" name="s" value="Search" onfocus="this.value=''" onblur="this.value='Search'">
        </form>
      </div>
      <div class="tuijian">
			<h2>最新文章</h2>
			<ol>
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newarticles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
				<li><span><strong><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</strong></span><a href="showarticle.php?article_id=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
</a></li>
				<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>	
				<li><span><strong>1</strong></span><a href="#">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
				<?php } ?>
					
			</ol>
	</div>
	<div class="toppic">
			<h2>分类博客</h2>
			<ul>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categorys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<li><a href="morearticle.php?category=<?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
images/k02.jpg" ><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

							<p><?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>
</p>
						</a>
					</li>
					<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>	
					<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
images/k01.jpg">
							<p>unfinish</p>
							</a></li>
					<?php } ?>
			</ul>
	</div>
	<div class="clicks">
			<h2>最新注册</h2>
			<ol>	
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<li><span><a href="morearticle.php?user=<?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
</a></span><a href="morearticle.php?user=<?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value[4];?>
</a></li>
				<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>	
				<?php } ?>
			</ol>
	</div>
    </aside>
  </div>
  <!--blogs end--> 
</div>
<!--mainbody end-->
<?php echo $_smarty_tpl->getSubTemplate ("./../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
