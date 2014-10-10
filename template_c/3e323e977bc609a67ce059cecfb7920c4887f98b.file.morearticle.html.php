<?php /* Smarty version Smarty-3.1.18, created on 2014-10-05 02:58:31
         compiled from "E:\PHP\PHPnow-1.5.6\htdocs\InsistBlog\template\home\morearticle.html" */ ?>
<?php /*%%SmartyHeaderCode:28056542fc381cfbfa5-81047267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e323e977bc609a67ce059cecfb7920c4887f98b' => 
    array (
      0 => 'E:\\PHP\\PHPnow-1.5.6\\htdocs\\InsistBlog\\template\\home\\morearticle.html',
      1 => 1412477900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28056542fc381cfbfa5-81047267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_542fc381d45594_04384720',
  'variables' => 
  array (
    'whichpage' => 0,
    'articlearray' => 0,
    'row' => 0,
    'UPLOADPATH' => 0,
    'totalrecord' => 0,
    'newarticles' => 0,
    'i' => 0,
    'categorys' => 0,
    'value' => 0,
    'PUBLICPATH' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542fc381d45594_04384720')) {function content_542fc381d45594_04384720($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\PHP\\PHPnow-1.5.6\\htdocs\\InsistBlog\\libs\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("./../header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--header end-->
<div id="mainbody">
  <div class="blogs">
    <div class="newlist">
  <h2><span>
  <!--
      <a href="#">div+css</a>
      <a href="#">心得笔记</a>
      <a href="#">ASP</a>
      <a href="#">IP查询</a>
      <a href="#">JS经典实例</a>
      <a href="#">html5资讯</a> -->
</span>您当前的位置：<a href="index.php">首页</a>&nbsp;>&nbsp;<a href="#"><?php echo $_smarty_tpl->tpl_vars['whichpage']->value;?>
</a></h2>
     <ul>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articlearray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
		<?php if (is_array($_smarty_tpl->tpl_vars['row']->value)) {?>
		<p class="ptit"><b><a href="showarticle.php?article_id=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
" target="" title=" <?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
"> <?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
 </a></b></p>
		<p class="ptime">发布时间：<?php echo $_smarty_tpl->tpl_vars['row']->value[7];?>
 作者：<?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>
  分类：<?php echo $_smarty_tpl->tpl_vars['row']->value[6];?>
 </p>
		<a href="showarticle.php?article_id=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
" target="" title=" <?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
 ">
		<img src="<?php echo $_smarty_tpl->tpl_vars['UPLOADPATH']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['row']->value[5];?>
" class="imgdow" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
"></a>	
		<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value[3],150,"...");?>

		<p class="pcon"><a href="showarticle.php?article_id=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
" target="" title=" <?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
">详细信息</a></P>
		<div class="line"></div>
		<?php } else { ?>
				Nothing
		<?php }?>
		<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
		<p class="ptit"><b><a href="#" target="" title=" "> </a></b></p>
		<p class="ptime">发布时间： 作者：  分类： </p>
		<a href="#" target="" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['UPLOADPATH']->value;?>
images/s1.jpg" class="imgdow" alt=""></a>
		<p class="pcon"><a href="#" target="_blank" title="">详细信息</a></P>
		<div class="line"></div>
		<?php } ?>	
  </ul>
<div class="page"><a title="Total record"><b><?php echo $_smarty_tpl->tpl_vars['totalrecord']->value;?>
</b></a><b>1</b><a href="/jstt/index_2.html">2</a><a href="/jstt/index_2.html">></a><a href="/jstt/index_2.html">>></a></div>
</div>

    <!--bloglist end-->
    <aside>
      <div class="search">
        <form class="searchform" method="get" action="#">
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
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value[1],15,"...");?>
</a></li>
				<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>	
				<li><span><strong>1</strong></span><a href="#">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
				<li><span><strong>2</strong></span><a href="#">励志人生-要做一个潇洒的女人</a></li>
				<li><span><strong>3</strong></span><a href="#">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
				<li><span><strong>4</strong></span><a href="#">Green绿色小清新的夏天-个人博客模板</a></li>
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

							<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value[1],15,"...");?>
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
        <h2>注册博友</h2>
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
