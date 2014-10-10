<?php /* Smarty version Smarty-3.1.18, created on 2014-10-06 09:32:45
         compiled from "E:\PHP\PHPnow-1.5.6\htdocs\InsistBlog\template\home\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1966454292855768d75-64873579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d8c61807d64f21a0acc47bd7eeeed53264c6d19' => 
    array (
      0 => 'E:\\PHP\\PHPnow-1.5.6\\htdocs\\InsistBlog\\template\\home\\index.html',
      1 => 1412587796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1966454292855768d75-64873579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5429285582d8d5_07617632',
  'variables' => 
  array (
    'PUBLICPATH' => 0,
    'ImageTextTitle' => 0,
    'ImageTextContent' => 0,
    'user_name' => 0,
    'user_profession' => 0,
    'user_email' => 0,
    'islogin' => 0,
    'articlearray' => 0,
    'row' => 0,
    'UPLOADPATH' => 0,
    'article_content' => 0,
    'newarticles' => 0,
    'i' => 0,
    'categorys' => 0,
    'value' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5429285582d8d5_07617632')) {function content_5429285582d8d5_07617632($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_mb_truncate')) include 'E:\\PHP\\PHPnow-1.5.6\\htdocs\\InsistBlog\\libs\\plugins\\modifier.mb_truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("./../header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--header end-->
<div id="mainbody">
		<div class="info">
				<figure> <img src="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
images/art1.jpg"  alt="Panama Hat">
						<figcaption><strong><?php echo $_smarty_tpl->tpl_vars['ImageTextTitle']->value;?>
</strong><?php echo $_smarty_tpl->tpl_vars['ImageTextContent']->value;?>
</figcaption>
				</figure>
				<div class="card">
						<h1>我的名片</h1>
						<p>网名：<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
						<p>职业：<?php echo $_smarty_tpl->tpl_vars['user_profession']->value;?>
</p>
						<p>手机：123456789</p>
						<p>Email：<?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
</p>
						<ul class="linkmore">
								<li><a href="edit.php" class="talk" title="添加博客"></a></li>
								<?php if ($_smarty_tpl->tpl_vars['islogin']->value=="false") {?>
								<li><a href="login.php?act=login" class="address" title="登录"></a></li>
								<?php } else { ?>
								<li><a href="login.php?act=logout" class="address" title="退出登录"></a></li>
								<?php }?>
								<li><a href="signup.php" class="heart" title="注册"></a></li>
						</ul>
				</div>
		</div>
		<!--info end-->
		<div class="blank"></div>
		<div class="blogs">
				<ul class="bloglist">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articlearray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
					<?php if (is_array($_smarty_tpl->tpl_vars['row']->value)) {?>
						<li>
								<div class="arrow_box">
										<div class="ti"></div>
										<!--三角形-->
										<div class="ci"></div>
										<!--圆形-->
										<h2 class="title"><a href="showarticle.php?article_id=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
" target=""><?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
</a></h2>
										<ul class="textinfo">
												<a href="showarticle.php?article_id=<?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['UPLOADPATH']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['row']->value[5];?>
"></a>
												<p> <?php echo smarty_modifier_mb_truncate($_smarty_tpl->tpl_vars['row']->value[3],150);?>
</p>
										</ul>
										<div>
										<ul class="details">
												<li class="likes"><a href="#"><?php echo $_smarty_tpl->tpl_vars['row']->value[8];?>
</a></li>
												<li class="comments"><a href="#"><?php echo $_smarty_tpl->tpl_vars['row']->value[9];?>
</a></li>
												<li class="icon-time"><a href="#"><?php echo $_smarty_tpl->tpl_vars['row']->value[7];?>
</a></li>
										</ul>
										</div>
								</div>
								<!--arrow_box end--> 
						</li>
					<?php } else { ?>
						Nothing
					<?php }?>
				<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
						<li>
								<div class="arrow_box">
										<div class="ti"></div>
										<!--三角形-->
										<div class="ci"></div>
										<!--圆形-->
										<h2 class="title"><a href="" target="_blank"></a></h2>
										<ul class="textinfo">
											
												<a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
images/s1.jpg"></a>
												<p> <?php echo $_smarty_tpl->tpl_vars['article_content']->value;?>
</p>
											
										</ul>
										<ul class="details">
												<li class="likes"><a href="">0</a></li>
												<li class="comments"><a href="">0</a></li>
												<li class="icon-time"><a href="">2014-9-24</a></li>
										</ul>
								</div>
								<!--arrow_box end--> 
						</li>
				<?php } ?>		
				</ul>
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
"><?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
</a></li>
									<?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>	
									<li><span><strong>1</strong></span><a href="#">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
									<li><span><strong>2</strong></span><a href="#">励志人生-要做一个潇洒的女人</a></li>
									<li><span><strong>3</strong></span><a href="#">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
									<li><span><strong>4</strong></span><a href="#">Green绿色小清新的夏天-个人博客模板</a></li>
									<li><span><strong>5</strong></span><a href="#">女生清新个人博客网站模板</a></li>
									<li><span><strong>6</strong></span><a href="#">Wedding-婚礼主题、情人节网站模板</a></li>
									<li><span><strong>7</strong></span><a href="#">Column 三栏布局 个人网站模板</a></li>
									<li><span><strong>8</strong></span><a href="#">时间煮雨-个人网站模板</a></li>
									<li><span><strong>9</strong></span><a href="#">花气袭人是酒香—个人网站模板</a></li>
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
						
						<div class="viny">
								<dl>
										<dt class="art"><img src="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
images/just.jpg" alt="专辑"></dt>
										<dd class="icon-song"><span></span>Just One Last Dance</dd>
										<dd class="icon-artist"><span></span>歌手：Sarah Connor</dd>
										<dd class="icon-album"><span></span>发行时间：2004-03-01</dd>
										<dd class="icon-like"><span></span><a href="/">喜欢</a></dd>
										<dd class="music">
												<audio src="<?php echo $_smarty_tpl->tpl_vars['PUBLICPATH']->value;?>
music/Sarah Connor-Just One Last Dance1.mp3" controls loop></audio>
										</dd>
										<!--也可以添加loop属性 音频加载到末尾时，会重新播放-->
								</dl>
						</div>
						
				</aside>
		</div>
		<!--blogs end--> 
</div>
<!--mainbody end-->
<?php echo $_smarty_tpl->getSubTemplate ("./../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
