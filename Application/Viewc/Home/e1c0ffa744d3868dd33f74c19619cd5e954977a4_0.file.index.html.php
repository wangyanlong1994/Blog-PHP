<?php
/* Smarty version 3.1.32, created on 2018-11-30 03:40:52
  from 'F:\phpDevelop\2018\09-28phpblogd4\products1\Application\View\Home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c00b144dce850_43421130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1c0ffa744d3868dd33f74c19619cd5e954977a4' => 
    array (
      0 => 'F:\\phpDevelop\\2018\\09-28phpblogd4\\products1\\Application\\View\\Home\\index.html',
      1 => 1543549252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c00b144dce850_43421130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\phpDevelop\\2018\\09-28phpblogd4\\products1\\Framework\\Core\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>www.myblog.com - Welcome to 我的博客 - Powered by PHP150912</title>
	<link rel="stylesheet" href="/Public/style/default.css" type="text/css" media="all"/>

</head>
<body class="multi index">

<!-- top bar -->
<div id="top">
	<div class="center">
    <div class="menu-left">
    <ul>
     <li><a href="javascript:;" onclick="setHomepage('http://www.myblog.com');">设为首页</a></li>
     <li><a href="javascript:;" onclick="addFavorite('http://www.myblog.com','www.myblog.com - Welcome to 我的博客')">收藏本站</a></li>
    </ul>
    </div>
    <div class="menu-right">
			<ul id="info">
			    <?php if (isset($_SESSION['user'])) {?>
			        <li>欢迎 <?php echo $_SESSION['user']['user_name'];?>
！</li>
			    <?php }?>
			    <li><a href="index.php?p=Admin&c=Admin&a=admin">管理</a></li>
			    <?php if (isset($_SESSION['user'])) {?>
			        <li><a href="index.php?p=Admin&c=Login&a=logout">退出</a></li>
			    <?php }?>
			</ul>
	    </div>
   </div>
</div>

<div id="divAll">
	<div id="divPage">
	<div id="divMiddle">
		<div id="divTop">
			<h1 id="BlogTitle"><a href="index.php?p=Home&c=Index&a=index">www.myblog.com</a></h1>
			<h3 id="BlogSubTitle">Welcome to 我的博客</h3>
		</div>
		<div id="divNavBar">
			<ul>
				<li id="nvabar-item-index"><a href="index.php?p=Home&c=Index&a=index">首页</a></li><li id="navbar-page-2"><a href="">留言本</a></li>			</ul>
		</div>

		<div id="divMain">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['art_list'], 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
			<div class="post multi">
				<h4 class="post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rows']->value['art_time'],'%Y-%m-%d %H:%M:%S');?>
</h4>
				<h2 class="post-title"><a href="index.php?p=Home&c=Article&a=article&art_id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['art_title'];?>
</a></h2>
				<div class="post-body">
					<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_content'];?>

				</div>
				<h5 class="post-tags"></h5>
				<h6 class="post-footer">
					作者:<?php echo $_smarty_tpl->tpl_vars['rows']->value['user_name'];?>
 | 分类:<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_name'];?>
 | 阅读:<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_read'];?>
 | 赞:<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_up'];?>
 | 踩:<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_down'];?>
</h6>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['page_str'];?>

		</div>
<div id="divSidebar">

<dl class="function" id="divSearchPanel">
<dt class="function_t">文章标题搜索</dt><dd class="function_c">

<div>
	<form name="search" method="post" action="index.php?p=Home&c=Index&a=sp">
		<input type="text" name="txt" size="11" value=""/>
		<input type="submit" value="搜索" />
	</form>
</div>


</dd>
</dl>
<dl class="function" id="divCalendar">
<dt style="display:none;"></dt><dd class="function_c">

<div></div>


</dd>
</dl>
<dl class="function" id="divCatalog">
<dt class="function_t">文章分类</dt><dd class="function_c">
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['cat_list'], 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
	<li><a href="index.php?p=Home&c=Article&a=list&cat_id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_id'];?>
"><?php echo str_repeat('&nbsp;',$_smarty_tpl->tpl_vars['rows']->value['deep']*4);
echo $_smarty_tpl->tpl_vars['rows']->value['cat_name'];?>
</a></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

</dd>
</dl>
<dl class="function" id="divLinkage">
<dt class="function_t">友情链接</dt><dd class="function_c">
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['link_list'], 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['rows']->value['link_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['link_name'];?>
</a></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

</dd>
</dl></div>
		<div id="divBottom">
        	<h3 id="BlogCopyRight">
                                            	Copyright © 2008-2028 PHP150912 All Rights Reserved            </h3>
			<h4 id="BlogPowerBy">Powered by <a href="" title="myblog" target="_blank">myblog V1.0 Release 20151116</a></h4>
		</div><div class="clear"></div>
	</div><div class="clear"></div>
	</div><div class="clear"></div>
</div>
</body>
</html><?php }
}
