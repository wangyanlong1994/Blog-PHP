<?php
/* Smarty version 3.1.32, created on 2018-11-30 03:41:20
  from 'F:\phpDevelop\2018\09-28phpblogd4\products1\Application\View\Home\article.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c00b1606848e4_90259745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70c8070dfb1fc0acdc36c9d535f9b799ddc743d8' => 
    array (
      0 => 'F:\\phpDevelop\\2018\\09-28phpblogd4\\products1\\Application\\View\\Home\\article.html',
      1 => 1543549274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c00b1606848e4_90259745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\phpDevelop\\2018\\09-28phpblogd4\\products1\\Framework\\Core\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>www.myblog.com - 数量测试 - Powered by ITCAST</title>
	<link rel="stylesheet"  href="/Public/style/default.css" type="text/css" media="all"/>
</head>
<body class="single article">

<!-- top bar -->
<div id="top">
	<div class="center">
    <div class="menu-left">
    <ul>
     <li><a href="javascript:;" onclick="setHomepage('');">设为首页</a></li>
     <li><a href="javascript:;" onclick="addFavorite('','www.myblog.com - Welcome to TQBlog!')">收藏本站</a></li>
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
			<h3 id="BlogSubTitle">Welcome to TQBlog!</h3>
		</div>
		<div id="divNavBar">
			<ul>
				<li id="nvabar-item-index"><a href="index.php?p=Home&c=Index&a=index">首页</a></li><li id="navbar-page-2"><a href="?id=2">留言本</a></li><li id="navbar-category-2"><a href="?cate=2">旅游</a></li>			</ul>
		</div>

		<div id="divMain">
<div class="post single">
	<h4 class="post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['info']['art_time'],'%Y-%m-%d %H:%M:%S');?>
</h4>
	<h2 class="post-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['info']['art_title'];?>
</h2>
	<div class="post-body"><?php echo $_smarty_tpl->tpl_vars['data']->value['info']['art_content'];?>
</div>
	<h5 class="post-tags"></h5>
	<h6 class="post-footer">
		阅读:<?php echo $_smarty_tpl->tpl_vars['data']->value['info']['art_read'];?>
|
<a href="index.php?p=Home&c=Article&a=UpDown&art_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['info']['art_id'];?>
&flag=1">赞</a>:<?php echo $_smarty_tpl->tpl_vars['data']->value['info']['art_up'];?>

<a href="index.php?p=Home&c=Article&a=UpDown&art_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['info']['art_id'];?>
&flag=0">踩</a>:<?php echo $_smarty_tpl->tpl_vars['data']->value['info']['art_down'];?>

        </h6>
</div>

<div class="bdsharebuttonbox"><a class="bds_more" href="#" data-cmd="more"></a><a title="分享到QQ空间" class="bds_qzone" href="#" data-cmd="qzone"></a><a title="分享到新浪微博" class="bds_tsina" href="#" data-cmd="tsina"></a><a title="分享到腾讯微博" class="bds_tqq" href="#" data-cmd="tqq"></a><a title="分享到人人网" class="bds_renren" href="#" data-cmd="renren"></a><a title="分享到微信" class="bds_weixin" href="#" data-cmd="weixin"></a></div>

<?php echo '<script'; ?>
>
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
<?php echo '</script'; ?>
>



<div>
	<a href="index.php?p=Home&c=Article&a=prevNextArticle&art_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['info']['art_id'];?>
&type=0">上一篇</a>
    <a href="index.php?p=Home&c=Article&a=prevNextArticle&art_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['info']['art_id'];?>
&type=1">下一篇</a>
</div>


<label id="AjaxCommentBegin"></label>
<!--评论输出-->
<ul class="msg msghead">
	<li class="tbname">评论列表:</li>
</ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['reply_list'], 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
<ul id="cmt1" class="msg" style="margin-left:<?php echo $_smarty_tpl->tpl_vars['rows']->value['deep']*50;?>
px">
	<li class="msgname"><img width="32" alt="" src="/09-28phpblogd4/products1/Public/Uploads/<?php echo $_smarty_tpl->tpl_vars['rows']->value['user_face'];?>
" class="avatar">&nbsp;<span class="commentname"><?php echo $_smarty_tpl->tpl_vars['rows']->value['user_name'];?>
</span><br><small>发布于&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rows']->value['reply_time'],'%Y-%m-%d %H:%M:%S');?>
&nbsp;&nbsp;<span class="revertcomment"><a  href="#comment" onclick="getReplyId(<?php echo $_smarty_tpl->tpl_vars['rows']->value['reply_id'];?>
)">回复</a></span></small></li>
	<li class="msgarticle"><?php echo $_smarty_tpl->tpl_vars['rows']->value['reply_content'];?>
</li>
</ul>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<!--评论翻页条输出-->
<div class="pagebar commentpagebar">
</div>
<label id="AjaxCommentEnd"></label>

<!--评论框-->
<div class="post" id="divCommentPost">
	<p class="posttop"><a name="comment"><?php echo $_smarty_tpl->tpl_vars['rows']->value['user_name'];?>
发表评论:</a><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;"><small>取消回复</small></a></p>
<form id="frmSumbit"  method="post" action="" >
    <input type="hidden" name="reply_id" id="replyid" value="">
    <p><label for="txaArticle">正文(*)</label></p>
    <p><textarea name="txaArticle" id="txaArticle" class="text" cols="50" rows="4"  ></textarea></p>
    <p><input name="sumbit" type="submit"  value="提交"  class="button" /></p>
</form>
	<p class="postbottom">☆欢迎发表您的看法、交流您的观点。</p>
</div>
		</div>
		<div id="divBottom">
        	<h3 id="BlogCopyRight">
                                            	Copyright © 2008-2028 tqtqtq.com All Rights Reserved            </h3>
			<h4 id="BlogPowerBy">Powered by <a href="http://www.tqtqtq.com/" title="TQBlog" target="_blank">TQBlog V2.0 Release 20140101</a></h4>
		</div><div class="clear"></div>
	</div><div class="clear"></div>
	</div><div class="clear"></div>
</div>
<?php echo '<script'; ?>
>
	function getReplyId(id){
		document.getElementById('replyid').setAttribute('value', id);
	}
<?php echo '</script'; ?>
>
</body>
</html><!--86.655ms--><?php }
}
